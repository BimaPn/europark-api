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
            'schedule'=> '01.00 PM - 04.00 PM'
        ]);
        Schedule::create([
            'schedule'=> '06.00 PM - 09.00 PM'
        ]);
    }
}
