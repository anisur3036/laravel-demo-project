<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopping', [DemoController::class, 'getShoppingCentre']);
Route::get('/number-of-shopping', [DemoController::class, 'index']);
