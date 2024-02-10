<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ticket::create([
            'id' => 'f6dbc6a6-be33-4d94-a21b-865e6e4ae765',
            'name' => 'Tatang Jr',
            'email' => 'tatang@gmail.com',
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => Carbon::now()->addDay(),
            'schedule_id' => 2
        ]);
        \App\Models\Ticket::create([
            'id' => '7ac129cb-41e8-4b0b-9530-d62415c9e878',
            'name' => 'Susi Tuti',
            'email' => 'susianjay@gmail.com',
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => Carbon::now()->addDay(),
            'schedule_id' => 2
        ]);
        \App\Models\Ticket::create([
            'id' => '8e54eeda-8d04-41e7-9bbc-252ce25b7a81',
            'name' => fake()->name(),
            'email' => fake()->email(),
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => fake()->date(),
            'schedule_id' => rand(1, 3)
        ]);
        \App\Models\Ticket::create([
            'id' => '6d91527f-5084-4801-a518-952366ad656d',
            'name' => fake()->name(),
            'email' => fake()->email(),
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => fake()->date(),
            'schedule_id' => rand(1, 3)
        ]);
        \App\Models\Ticket::create([
            'id' => '7fee93b6-1e14-4f0c-a68d-49ea6a6a726d',
            'name' => fake()->name(),
            'email' => fake()->email(),
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => fake()->date(),
            'schedule_id' => rand(1, 3)
        ]);
        \App\Models\Ticket::create([
            'id' => '894a2842-46a7-4999-9684-e9e0ef23d28f',
            'name' => fake()->name(),
            'email' => fake()->email(),
            'identity_card_picture' => env("APP_URL","http://localhost:8000") . "/storage/images/identity-card/test.jpg",
            'whatsapp_number' => "09828738278",
            'visit_date' => fake()->date(),
            'schedule_id' => rand(1, 3)
        ]);
    }
}
