<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('cities')->insert([
            [
                'name' => 'パスロエ',
                'king' => '앨리스A',
                'population' => 1200,
                'safety' => 60,
                'economy' => 'normal',
                'description' => '시작의 도시',
                'created_at' => now(),
                'updated_at' => now(),
                'pos_x' => 150,
                'pos_y' => 120,
            ],
            [
                'name' => 'クメルスン',
                'king' => '앨리스 B',
                'population' => 8000,
                'safety' => 70,
                'economy' => 'boom',
                'description' => '북부 교역 중심지. 금 거래가 활발하며, 대규모 길드가 활동.',
                'created_at' => now(),
                'updated_at' => now(),
                'pos_x' => 377,
                'pos_y' => 325,                
            ],
            [
                'name' => 'ルブニカ',
                'king' => '앨리스 C',
                'population' => 10000,
                'safety' => 45,
                'economy' => 'slump',
                'description' => '교회와 상인들의 힘이 충돌하는 도시. 불안정한 정치 상황.',
                'created_at' => now(),
                'updated_at' => now(),
                'pos_x' => 313,
                'pos_y' => 376,
            ],
            [
                'name' => 'ヨイツ',
                'king' => '앨리스 D',
                'population' => 300,
                'safety' => 90,
                'economy' => 'crisis',
                'description' => '호로의 고향이자 전설로 남은 늑대의 고향. 경제는 거의 마비 상태.',
                'created_at' => now(),
                'updated_at' => now(),
                'pos_x' => 81,
                'pos_y' => 129,
            ]
        ]);
    }
}
