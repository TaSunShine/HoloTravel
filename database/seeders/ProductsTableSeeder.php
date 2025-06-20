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
    [
        'name' => '羊皮紙の巻物',
        'cost' => 1200,
        'description' => '希少な羊皮紙に書かれた古い商取引の契約書'
    ],
    [
        'name' => '香辛料セット',
        'cost' => 1500,
        'description' => '遠い国から届いた珍しい香辛料の詰め合わせ'
    ],
    [
        'name' => '木製計算盤',
        'cost' => 600,
        'description' => '商人の必需品、数字を正確に計算するための道具'
    ],
    [
        'name' => '革の財布',
        'cost' => 1000,
        'description' => '丈夫で使いやすい、手作りの革財布'
    ],
    [
        'name' => '銀の懐中時計',
        'cost' => 5000,
        'description' => '時を正確に刻む、細工が施された銀製の時計'
    ],
    [
        'name' => '燻製用ハーブ',
        'cost' => 700,
        'description' => '肉や魚の燻製に使う香り高いハーブの束'
    ],
    [
        'name' => '羊毛のマフラー',
        'cost' => 900,
        'description' => '寒い季節に暖かい、柔らかい羊毛のマフラー'
    ],
    [
        'name' => '鉄製の鍵',
        'cost' => 400,
        'description' => '頑丈で複雑な仕掛けがある倉庫用の鍵'
    ],
    [
        'name' => '木彫りの人形',
        'cost' => 1100,
        'description' => '伝統的な技法で作られた小さな装飾用人形'
    ],
]);

    }
}
