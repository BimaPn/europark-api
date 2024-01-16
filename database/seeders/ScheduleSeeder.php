<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'schedule'=> '09.00 AM - 12.00 PM'
        ]);
        Schedule::create([
            'schedule'=> '13.00 PM - 16.00 PM'
        ]);
        Schedule::create([
            'schedule'=> '18.00 PM - 21.00 PM'
        ]);
    }
}
