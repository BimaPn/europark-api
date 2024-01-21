<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Collection::create([
            'id' => 'bfa4ddb9-918e-49f4-8d0b-612a4f790825',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
        \App\Models\Collection::create([
            'id' => '4af62d38-6e0a-42b4-9bb1-48a49f538380',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
        \App\Models\Collection::create([
            'id' => 'e7fbc122-ba3a-413d-b5a0-127cccdb3144',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
        \App\Models\Collection::create([
            'id' => '21684860-8ed8-4c8b-9256-a91385653600',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
        \App\Models\Collection::create([
            'id' => 'e8d65233-0f2c-4960-ac0f-ae67182252cd',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
        \App\Models\Collection::create([
            'id' => 'caa3e5df-366b-483d-83da-79af96d99469',
            'name' => fake()->name(),
            'createdBy' => fake()->name(),
            'discovery_year' => '1498 AD',
            'origin' => fake()->country(),
            'description' => fake()->text(500)
        ]);
    }
}
