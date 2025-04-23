<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()?->role === 'organisateur') {
        return redirect()->route('organisateur.dashboard');
    }

    return redirect()->route('client.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'client'])->get('/client', function () {
    return view('client.dashboard');
})->name('client.dashboard');

Route::middleware(['auth', 'organisateur'])->get('/organisateur', function () {
    return view('organisateur.dashboard');
})->name('organisateur.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

