<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        echo "PostController 진입";
        $validatedData  = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'address' => 'required|string|max:255'
        ]);
        
        $posts = Person::all();
        return view('index', compact('posts'));
    }
}
