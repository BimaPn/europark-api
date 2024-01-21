<?php

namespace Database\Seeders;

use App\Models\TicketQuantity;
use Illuminate\Database\Seeder;

class TicketQuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketQuantity::create([
            'ticket_id' => 'f6dbc6a6-be33-4d94-a21b-865e6e4ae765',
            'type' => 'Dewasa',
            'quantity' => 5,
            'total_price' => 1000000
        ]);
        TicketQuantity::create([
            'ticket_id' => '7ac129cb-41e8-4b0b-9530-d62415c9e878',
            'type' => 'Pelajar',
            'quantity' => 6,
            'total_price' => 1020000
        ]);
        TicketQuantity::create([
            'ticket_id' => '8e54eeda-8d04-41e7-9bbc-252ce25b7a81',
            'type' => 'Anak-nak',
            'quantity' => 5,
            'total_price' => 575000
        ]);
        TicketQuantity::create([
            'ticket_id' => '6d91527f-5084-4801-a518-952366ad656d',
            'type' => 'Anak-nak',
            'quantity' => 5,
            'total_price' => 575000
        ]);
        TicketQuantity::create([
            'ticket_id' => '7fee93b6-1e14-4f0c-a68d-49ea6a6a726d',
            'type' => 'Anak-nak',
            'quantity' => 5,
            'total_price' => 575000
        ]);
        TicketQuantity::create([
            'ticket_id' => '894a2842-46a7-4999-9684-e9e0ef23d28f',
            'type' => 'Anak-nak',
            'quantity' => 5,
            'total_price' => 575000
        ]);
    }
}
