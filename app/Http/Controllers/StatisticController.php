<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Collection;
use App\Models\TicketQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function getMainStatistic ()
    {
        $visitorsToday = [
            'label' => 'Jumlah pengunjung hari ini.',
            'total' => $this->getVisitorsToday()
        ];
        $thisMonthTicketSold = [
            'label' => 'Tiket terjual bulan ini',
            'total' => $this->getThisMonthTicketsSold()
        ];
        $yearIncome = [
            'label' => 'Penghasilan tahun ini',
            'total' => $this->getYearIncome()
        ];
        $collectionsTotal = [
            'label' => 'Total koleksi museum.',
            'total' => $this->getTotalCollections()
        ];

        return response()->json([
            "visitorsToday" => $visitorsToday,
            "thisMonthTicketSold" => $thisMonthTicketSold,
            "yearIncome" => $yearIncome,
            "collectionsTotal" => $collectionsTotal
        ]);
    }

    public function getLastHalfYearTicketSold ()
    {
        $now = Carbon::now();
        $result = [];
        for ($i = 5; $i >= 0; $i--) {
            $currentMonth = $now->copy()->subMonths($i);
            $monthName = $currentMonth->format('F');

            $ticketCount = Ticket::whereYear('created_at', $currentMonth->year)
                ->whereMonth('created_at', $currentMonth->month)
                ->count();

            $result[] = [
                'month' => $monthName,
                'value' => $ticketCount
            ];
        }

        return response()->json([
            'result' => $result,
        ]);
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
        $result = Collection::count();
        return $result;
    }
}
