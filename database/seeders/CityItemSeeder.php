<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city_items')->insert([
            [
                'city_id' => 1,
                'item_id' => 1,
            ],
            [
                'city_id' => 1,
                'item_id' => 2,
            ],
            [
                'city_id' => 2,
                'item_id' => 3,
            ],
            [
                'city_id' => 2,
                'item_id' => 4,
            ],
            [
                'city_id' => 3,
                'item_id' => 5,
            ],
        ]);
    }
}
