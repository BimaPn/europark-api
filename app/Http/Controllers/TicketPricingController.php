<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTicketPricingRequest;
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

    public function getPrices()
    {
        $pricings = TicketPricing::all("id","type","price");
        return response()->json([
            "pricings" => $pricings
        ]);
    }

    public function update(UpdateTicketPricingRequest $request)
    {
        $validatedData = $request->validated();

        foreach ($validatedData["pricings"] as $pricing) {
            $item = TicketPricing::find($pricing["id"]);
            if(!$item) {
                return response()->json([
                    "message" => "Ticket category with id : $pricing->id not found."
                ],400);
            }
            $item->price = $pricing["price"];
            $item->update();
        }
        return response()->json([
            "message" => "success."
        ]);
    }
}
