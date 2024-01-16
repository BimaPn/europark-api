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
        $this->call(ScheduleSeeder::class);
        $this->call(TicketPricingSeeder::class);
    }
}
