
<?php

use App\Http\Controllers\CompotitionController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::resource('compotition', CompotitionController::class);
Route::resource('game', GameController::class);
