<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\worldmapController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProductController;

Route::get('/map',
[worldmapController::class, 'map'])->name('map');

Route::get('/myinfo',
[PlayerController::class, 'info'])->name('myinfo'); 

Route::get('/productList',
[ProductController::class, 'productList'])->name('products');