<?php

namespace App\Http\Controllers;

use App\Mail\SendTicket;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Schedule;
use App\Models\Ticket;
use App\Models\TicketQuantity;
use App\Helpers\Helpers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::select('id', 'name', 'email', 'visit_date','schedule_id')
        ->with('schedule:id,schedule')
        ->orderBy('created_at', 'desc')
        ->paginate(3);

        $result = [];
        foreach ($tickets as $ticket) {
            $result[] = [
                'id' => $ticket->id,
                'name' => $ticket->name,
                'email' => $ticket->email,
                'visit_date' => $ticket->visit_date,
                'expired' => $ticket->checkExpired(),
                'schedule' => $ticket->schedule->schedule,
            ];
        }
        return response()->json([
            'result' => $result,
            "paginate" => [
                "lastPage" => $tickets->lastPage()
            ],
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->get("name");
        $tickets = Ticket::where("name","like","%{$query}%")
        ->with('schedule:id,schedule')
        ->orderBy('created_at', 'desc')
        ->paginate(3);

        $result = [];
        foreach ($tickets as $ticket) {
            $result[] = [
                'id' => $ticket->id,
                'name' => $ticket->name,
                'email' => $ticket->email,
                'visit_date' => $ticket->visit_date,
                'expired' => $ticket->checkExpired(),
                'schedule' => $ticket->schedule->schedule,
            ];
        }

        return response()->json([
            "tickets" => $result,
            "paginate" => [
                "lastPage" => $tickets->lastPage()
            ],
        ]);
    }

    public function show(Ticket $ticket) {

        return response()->json([
            "ticket" => $ticket->getDetail(),
        ]);

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
        $imagePath = env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/" . $imageUniqueName;
        $validatedData["identity_card_picture"] = $imagePath;

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
}
