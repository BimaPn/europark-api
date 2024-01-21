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
            'ticket_id' => 'f6dbc6a6-be33-4d94-a21b-865e6e4ae765',
            'type' => 'Pelajar',
            'quantity' => 6,
            'total_price' => 1020000
        ]);
        TicketQuantity::create([
            'ticket_id' => 'f6dbc6a6-be33-4d94-a21b-865e6e4ae765',
            'type' => 'Anak-nak',
            'quantity' => 5,
            'total_price' => 575000
        ]);

    }
}
