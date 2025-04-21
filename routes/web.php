<?php

use App\Http\Controllers\CompotitionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::resource('compotition', CompotitionController::class);
