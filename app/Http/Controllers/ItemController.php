<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = products::all();
        return response()->json($items);
    }
    public function show($id){
        $item = products::find($id);
        return response()->json($item);
    }

    public function indexview(){
        $items = products::all();
        return view('main',compact('items'));
    }
}
