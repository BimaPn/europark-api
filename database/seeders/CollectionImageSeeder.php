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
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/monalisa.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '4af62d38-6e0a-42b4-9bb1-48a49f538380',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/potato_eaters.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'e7fbc122-ba3a-413d-b5a0-127cccdb3144',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/bedroom.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '21684860-8ed8-4c8b-9256-a91385653600',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/terrace_night.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'e8d65233-0f2c-4960-ac0f-ae67182252cd',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/virgin.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'caa3e5df-366b-483d-83da-79af96d99469',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/sunday.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '2851495c-5056-41b1-b106-5a6e6c4d7b0e',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/night_watch.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '9ff135fe-7723-4d12-84f3-749c2f682c01',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/mystical.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'd94ac532-77bf-41d9-b60e-ef3bd31a0bab',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/altarpiece.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '982ca7a2-c234-4862-a946-c436216fca80',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/starry_night.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => 'bb84b5ae-af06-45a1-a2ef-4b9817e29a9a',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/shipwreck.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '864e6462-a1df-43d1-b566-859b24432e14',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/golden_helmet.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '05ed08c9-816b-41a3-851f-261d61bd6de4',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/storm_sea.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '1259cda9-6fe5-4642-99b3-6c6480085003',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/justus.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '33a89882-cb9d-4f04-9344-320e8d605f12',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/phaeton.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '29c8e298-2a8c-47c5-9beb-1dfd236ff3d3',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/honeysuckle.jpg",
        ]);
        \App\Models\CollectionImage::create([
            'collection_id' => '848122b1-9130-4fe9-a52d-e678c77df199',
            'image' => env("APP_URL","http://localhost:8000") . "/storage/images/collection/anne.jpg",
        ]);
    }
}
