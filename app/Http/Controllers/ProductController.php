<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\product;


class ProductController extends Controller
{
    public function productList(Request $request)
    {        
        $products = product::all();
        return view('productsList', compact('products'));
    }

}
