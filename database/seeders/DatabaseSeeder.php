<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Admin::factory()->create([
            'id' => '79f42ee9-dc4b-459c-8363-d3688bce36bf',
            'name' => 'silly guy',
            'email' => 'michel@gmail.com',
        ]);
        \App\Models\Ticket::create([
            'id' => 'f6dbc6a6-be33-4d94-a21b-865e6e4ae765',
            'name' => 'Tatang Jr',
            'email' => 'tatang@gmail.com',
            'identity_card_picture' => 'test.jpg',
            'whatsapp_number' => "09828738278",
            'visit_date' => fake()->date(),
            'schedule_id' => 1
        ]);
        $this->call(ScheduleSeeder::class);
        $this->call(TicketPricingSeeder::class);
        $this->call(TicketQuantitySeeder::class);
    }
}
