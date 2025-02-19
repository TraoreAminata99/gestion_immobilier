<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PropertieController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::resource('/mypropertie', PropertieController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//route utilisateur
Route::middleware('auth')->group(function () {
    
    Route::get('/reservation', [BookingsController::class, 'index'])->name('reserver');
    Route::get('/booking', [BookingsController::class, 'booking'])->name('booking');
    Route::post('/booking/store', [BookingsController::class, 'store'])->name('booking.store');
    Route::patch('/booking/{booking}/cancel', [DashboardController::class, 'cancel'])->name('booking.cancel');
    Route::get('/booking/{booking}/edit', [DashboardController::class, 'edit'])->name('booking.edit');
    Route::patch('/booking/{booking}', [DashboardController::class, 'update'])->name('booking.update');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
