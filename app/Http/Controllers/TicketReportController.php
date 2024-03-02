<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TicketReportController extends Controller
{
    public function showReport (Request $request)
    {
        $year = $request->query("year");
        $month = $request->query("month");
        $day = $request->query("day");
        $data = [];

        if($year && !$month && !$day) {
            $data = Ticket::whereYear("created_at",$year)->get();
        }else if($year && $month && !$day) {
            $data = Ticket::whereYear("created_at",$year)
                          ->whereMonth("created_at",$month)
                          ->get();
        }else if($year && $month && $day) {
            $data = Ticket::whereYear("created_at",$year)
                          ->whereMonth("created_at",$month)
                          ->whereDay("created_at",$day)
                          ->get();
        }else {
            $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;

            $data = Ticket::whereYear('created_at', $currentYear)
                        ->whereMonth('created_at', $currentMonth)
                        ->get();
        }

        $pdf = Pdf::loadView("report.index",["tickets" => $data]);
        return $pdf->stream();
    }
}
