<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\CollectionImage::create([
            'collection_id' => 'bfa4ddb9-918e-49f4-8d0b-612a4f790825',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'bfa4ddb9-918e-49f4-8d0b-612a4f790825',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '4af62d38-6e0a-42b4-9bb1-48a49f538380',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'e7fbc122-ba3a-413d-b5a0-127cccdb3144',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '21684860-8ed8-4c8b-9256-a91385653600',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'e8d65233-0f2c-4960-ac0f-ae67182252cd',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'caa3e5df-366b-483d-83da-79af96d99469',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/example.jpg",
        ]);
    }
}
