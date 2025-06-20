<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        // 모든 Person 데이터 조회
        $people = Person::all();

        // 'people.index' 뷰로 데이터 전달
        return view('index', compact('index'));
    }
}
