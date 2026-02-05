<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

Route::middleware(['auth','role:restaurateur'])->group(function(){
    Route::get('/restaurant', function(){
        $userId = auth()->id();
        $total = \App\Models\restaurant::where('userId', $userId)->where('isDeleted', false)->count();
        $active = \App\Models\restaurant::where('userId', $userId)->where('isActive', true)->where('isDeleted', false)->count();
        $inactive = \App\Models\restaurant::where('userId', $userId)->where('isDeleted', false)->where('isActive', false)->count();
        $stats = [
            'total' => $total,
            'active' => $active,
            'inactive' => $inactive,
        ];
        return view('restaurateur.dashboard', compact('stats'));
    })->middleware(['auth', 'verified'])->name('restaurateur.dashboard');

    Route::resource('restaurants', App\Http\Controllers\RestaurantController::class);
    Route::post('/restaurants/{restaurant}/menus', [App\Http\Controllers\RestaurantController::class, 'storeMenu'])->name('restaurants.menus.store');
    Route::post('/menus/{menu}/plat', [App\Http\Controllers\RestaurantController::class, 'storePlat'])->name('menus.plat.store');
    Route::get('/reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservations.index');

});


require __DIR__.'/auth.php';
