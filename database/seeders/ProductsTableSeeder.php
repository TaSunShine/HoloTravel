<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => '鉄棒',
                'cost' => 800,
                'description' => '険しい鉄棒。鬼ヶ島の鬼が使ったと伝える'
            ],
        ]);
    }
}
