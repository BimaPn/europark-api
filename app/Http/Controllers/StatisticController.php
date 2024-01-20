<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function getMainStatistic ()
    {
        $visitorsToday = $this->getVisitorsToday();
        $thisMonthTicketSold = $this->getThisMonthTicketsSold();
        $yearIncome = $this->getYearIncome();
        $bababoy = $this->getLastHalfYearTicketSold();

        return response()->json([
            "visitorsToday" => $visitorsToday,
            "thisMonthTicketSold" => $thisMonthTicketSold,
            "yearIncome" => $yearIncome,
            "haha" => Carbon::create()->month(9)->format("F"),
            "bababoy" => $months,
            "cibuy" => $bababoy
        ]);
    }

    public function getLastHalfYearTicketSold ()
    {
        $now = Carbon::now();
        $result = [];

        for ($i = 0; $i < 6; $i++) {
            $currentMonth = $now->copy()->subMonths($i);
            $monthName = $currentMonth->format('F');

            $ticketCount = Ticket::whereYear('created_at', $currentMonth->year)
                ->whereMonth('created_at', $currentMonth->month)
                ->count();

            $result[$monthName] = $ticketCount;
        }

        return $result;
    }

    protected function getVisitorsToday ()
    {
        $today = Carbon::now()->toDateString();

        $total = TicketQuantity::whereDate('created_at', $today)
        ->sum('quantity');
        return $total;
    }

    protected function getThisMonthTicketsSold ()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $total = Ticket::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->count();

        return $total;
    }
    protected function getYearIncome ()
    {
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        $total = TicketQuantity::whereBetween('created_at', [$startOfYear, $endOfYear])
            ->sum('total_price');

        return $total;
    }
    protected function getTotalCollections ()
    {

    }
}
