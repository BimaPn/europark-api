<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            "visit_date" => "required|date"
        ]);

        $schedules = Schedule::all();

        $dateToString = Carbon::parse($validatedData["visit_date"])->setTimezone('WIT')->format("Y-m-d");
        $date = Carbon::createFromFormat('Y-m-d', $dateToString);

        $result = [];
        foreach ($schedules as $schedule) {
            $total = $schedule->tickets()->whereDate("visit_date",$date)
            ->get()->flatMap(function ($ticket) {
                return $ticket->quantity;
            })->sum("quantity");
            $maxTickets = env("MAX_TICKET_QUANTITY",16);

            $result [] = [
                "id" => $schedule->id,
                "schedule" => $schedule->schedule,
                "disabled" => $total > $maxTickets,
                "available" => $total > $maxTickets ? 0 : ($maxTickets - $total)
            ];
        }

        return response()->json([
            "schedules" => $result
        ]);
    }
}
