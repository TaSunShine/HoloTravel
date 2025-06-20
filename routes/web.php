<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ItemController;



Route::get('/form',[FormController::class, 'showForm']);
Route::post('/submit',[FormController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('items', ItemController::class);
Route::get('/myproducts', [ItemController::class, 'itemsview']);


Route::get('/gotohome',function(){   
    return view('test');
});
Route::get('/welcome',function(){   
    return view('welcome');
});

Route::get('/myproducts/trade/process',function(){   
    return view('myproducts');
});

Route::get('/123',function(){   
    return view('rensu');
});



Route::get('/result',
[FormController::class, 'handle']);