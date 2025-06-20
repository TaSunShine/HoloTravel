<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    // Json file type return, fetch
    public function index(){
        $items = products::all();
        return response()->json($items);
    }
    public function show($id){
        $item = products::find($id);
        return response()->json($item);
    }

    public function itemsview(){
        $items = products::all();
        return view('myproducts',compact('items'));
    }
}