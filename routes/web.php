<?php

use Illuminate\Support\Facades\Rou\e;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cities', CityController::class);
