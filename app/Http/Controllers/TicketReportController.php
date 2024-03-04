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
        $message = "";

        if($year && !$month && !$day) {
            $data = Ticket::whereYear("created_at",$year)->get();
            $message = "Tahun " . $year;
        }else if($year && $month && !$day) {
            $data = Ticket::whereYear("created_at",$year)
                          ->whereMonth("created_at",$month)
                          ->get();
            $message = "Bulan ". Carbon::create()->month($month)->locale('id')->monthName . " " . $year;
        }else if($year && $month && $day) {
            $data = Ticket::whereYear("created_at",$year)
                          ->whereMonth("created_at",$month)
                          ->whereDay("created_at",$day)
                          ->get();
            $monthStr = Carbon::create()->month($month)->locale('id')->monthName;
            $message = "Tanggal $day $monthStr $year";
        }else {
            $date = Carbon::now();
            $currentMonth = $date->month;
            $currentYear = $date->year;

            $data = Ticket::whereYear('created_at', $currentYear)
                        ->whereMonth('created_at', $currentMonth)
                        ->get();
            $message = "Bulan " . $date->locale("id")->monthName . " " . $currentYear;
        }

        $pdf = Pdf::loadView("report.index",["tickets" => $data, "message" => $message]);
        return $pdf->stream();
    }
    public function checkAvailableYears ()
    {
        $availableYears = Ticket::selectRaw("YEAR(created_at) as year")
                               ->groupBy("year")
                               ->pluck("year");
        return response()->json(["years" => $availableYears]);
    }
    public function checkAvailableMonths (Request $request)
    {
        $year = $request->query("year");
        if(!$year) {
            return response()->json([
                "message" => "Required year parameter."
            ],500);
        }
        $availableMonths = Ticket::selectRaw("MONTH(created_at) as month")
                               ->whereYear("created_at",$year)
                               ->groupBy("month")
                               ->pluck("month");
        return response()->json(["months" => $availableMonths]);
    }
    public function checkAvailableDays (Request $request)
    {
        $year = $request->query("year");
        $month = $request->query("month");
        if(!$year || !$month) {
            return response()->json([
                "message" => "Required year and month parameter."
            ],500);
        }
        $availableDays = Ticket::selectRaw("DAY(created_at) as day")
                               ->whereYear("created_at",$year)
                               ->whereMonth("created_at",$month)
                               ->groupBy("day")
                               ->pluck("day");
        return response()->json(["days" => $availableDays]);
    }
}
