<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            [
                'firstname' => 'Craft',
                'secondname' => 'Rowrance',
                'money' => 1000,
                'pos_x' => 150,
                'pos_y' => 120,
            ],

        ]);
    }
}
