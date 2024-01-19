<?php

namespace App\Http\Controllers;

use App\Models\TicketPricing;
use Illuminate\Http\Request;

class TicketPricingController extends Controller
{
    public function index()
    {
        $ticketTypes = TicketPricing::all(["id","type","description","price"]);
        for($i = 0;$i < count($ticketTypes);$i++) {
            $ticketTypes[$i]["quantity"] = 0;
        }
        return response()->json([
            "result" => $ticketTypes,
            "maxQuantity" => intval(env("MAX_TICKET_QUANTITY",16))
        ]);
    }
}
