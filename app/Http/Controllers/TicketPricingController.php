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

    public function update(UpdateTicketPricingRequest $request)
    {
        $validatedData = $request->validated();

        foreach ($validatedData["categories"] as $category) {
            $item = TicketPricing::find($category->id);
            if(!$item) {
                return response()->json([
                    "message" => "Ticket category with id : $category->id not found."
                ],400);
            }
            $item->price = $category->price;
            $item->update();
        }
        return response()->json([
            "message" => "success."
        ]);
    }
}
