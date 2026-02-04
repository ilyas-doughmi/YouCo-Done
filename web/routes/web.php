<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/restaurant/profile', function(){
        return view('restaurateur.profile.index');
    })->name('restaurant.profile');
});

    Route::get('/restaurant', function(){
        return view('restaurateur.dashboard');
    })->name('restaurateur.dashboard');

    Route::resource('restaurants', App\Http\Controllers\RestaurantController::class);
    Route::get('/reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservations.index');

require __DIR__.'/auth.php';
