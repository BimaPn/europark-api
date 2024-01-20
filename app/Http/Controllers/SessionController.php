<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketSessionRequest;
use App\Models\Schedule;
use App\Models\TicketPricing;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function checkTicketSession(Request $request)
    {
        $session = $request->session()->get('ticket');
        if($session) {
            $session["schedule"] = Schedule::find($session["schedule_id"])->select("id","schedule")->first();
        }
        return response()->json([
            "result" => $session ?? null
        ]);

    }

    public function storeTicketSession(StoreTicketSessionRequest $request)
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
