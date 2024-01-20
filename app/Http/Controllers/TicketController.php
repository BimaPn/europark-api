<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketSessionRequest;
use App\Mail\SendTicket;
use App\Models\Schedule;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use App\Models\TicketPricing;
use App\Models\TicketQuantity;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        $validatedData = $request->validated();
        $session = $request->session()->get("ticket");
        if(!$session) {
            return response()->json([
                "message" => "Session expired."
            ],419);
        }
        $image = $request->file("identity_card_picture");
        $imageOriginalName = $image->getClientOriginalName();
        $imageUniqueName = Helpers::generateUniqueFileName($imageOriginalName);
        $image->storeAs("/images/identity-card",$imageUniqueName);
        $validatedData["identity_card_picture"] = $imageUniqueName;

        $ticket = Ticket::create([
            ...$validatedData,
            "schedule_id" => $session["schedule_id"],
            "visit_date" => Carbon::parse($session["visit_date"])
        ]);

        foreach ($session["quantities"] as $quantity) {
            if($quantity["quantity"] > 0) {
                TicketQuantity::create([
                    "ticket_id" => $ticket->id,
                    "type" => $quantity["type"],
                    "quantity" => $quantity["quantity"],
                    "total_price" => ($quantity["quantity"] * $quantity["price"])
                ]);
            }
        }
        $request->session()->forget("ticket");

        $url = env("FRONTEND_URL","http://localhost:3000") . "/tickets/$ticket->id/verify";
        Mail::to($ticket->email)->send(new SendTicket($ticket->id, $ticket->name, $url));

        return response()->json([
            "message" => "Success.",
        ]);

    }

    public function getTicketVerify (Ticket $ticket)
    {
        if($ticket->verified === 1) {
            return response()->json([
                "message" => "Ticket is already verified"
            ],409);
        }
        $result = [
            "name" => $ticket->name,
            "email" => $ticket->email,
            "visit_date" => $ticket->visit_date,
        ];

        $quantity = TicketQuantity::where("ticket_id",$ticket->id)->get();
        foreach ($quantity as $item) {
            $result["quantity"][] = [
                "type" => $item["type"],
                "quantity" => $item["quantity"]
            ];
        }
        return response()->json([
            "result" => $result,
        ]);
    }

    public function verifyTicket (Ticket $ticket)
    {
        if($ticket->verified === 1) {
            session()->flash("status", "Tiket sudah di verifikasi.");
            return response()->json([
                "message" => "Ticket is already verified"
            ],409);
        }
        $ticket->verified = true;
        $ticket->update();
        session()->flash("status","Tiket telah berhasil di verifikasi.");
        return response()->json([
            "message" => "Success",
            "ticket" => $ticket
        ]);
    }

    public function checkSession(Request $request)
    {
        $session = $request->session()->get('ticket');
        if($session) {
            $session["schedule"] = Schedule::find($session["schedule_id"])->select("id","schedule")->first();
        }
        return response()->json([
            "result" => $session ?? null
        ]);

    }
    public function storeSession(StoreTicketSessionRequest $request)
    {
        $request->validated();
        $schedule = Schedule::find($request->schedule_id);
        if(!$schedule)
        {
            return response()->json([
                "message" => "Schedule not found."
            ],404);
        }
        $quantities_result = [];
        $quantities = $request->quantities;
        foreach ($quantities as $quantity) {
            $ticketType = TicketPricing::find($quantity['id']);
            if(!$ticketType)
            {
                return response()->json([
                    "message" => "Schedule not found."
                ],404);
            }
            $quantities_result[] = [
                "id" => $ticketType->id,
                "type" => $ticketType->type,
                "quantity" => $quantity["quantity"],
                "price" => $ticketType->price
            ];
        }
        $request->session()->put("ticket",[
            "visit_date" => $request->visit_date,
            "schedule_id" => $schedule->id,
            "quantities" => $quantities_result
        ]);

        return response()->json([
            "message" => "success",
            "result" => [
                "visit_date" => $request->visit_date,
                "schedule" => [
                    "id" => $schedule->id,
                    "schedule" => $schedule->schedule
                ],
                "quantities" => $quantities_result
            ]
        ]);
    }
}
