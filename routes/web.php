<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;



Route::get('/form',[FormController::class, 'showForm']);
Route::post('/submit',[FormController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gotohome',function(){   
    return view('test');
});
Route::get('/welcome',function(){   
    return view('welcome');
});
Route::get('/main',function(){   
    return view('main');
});
Route::get('/main/trade/process',function(){   
    return view('main');
});

Route::get('/123',function(){   
    return view('rensu');
});


Route::get('/result',
[FormController::class, 'handle']);

Route::get('/people',[PostController::class, 'index']);








