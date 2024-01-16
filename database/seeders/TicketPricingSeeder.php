<?php

namespace Database\Seeders;

use App\Models\TicketPricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketPricing::create([
            'type' => 'Anak-anak',
            'description' => 'Dibawah 12 tahun.',
            'price' => 115000
        ]);
        TicketPricing::create([
            'type' => 'Pelajar',
            'description' => 'Memiliki kartu pelajar.',
            'price' => 170000
        ]);
        TicketPricing::create([
            'type' => 'Dewasa',
            'price' => 250000
        ]);
        TicketPricing::create([
            'type' => 'Lansia',
            'description' => 'Diatas 65 tahun.',
            'price' => 200000
        ]);
    }
}
