<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class worldmapController extends Controller
{
    
public function map(Request $request)
{
    $cities = \App\Models\City::all();
    $player = \App\Models\Player::first();

    $selectedCity = $cities->first(function ($city) use ($player) {
        return intval($city->pos_x) === intval($player->pos_x) && intval($city->pos_y) === intval($player->pos_y);
    });

    return view('map', compact('cities', 'player', 'selectedCity'));
}


}
