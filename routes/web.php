<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\Cars\CarFilterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Routes for guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Routes for authenticated users with role "user"
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/cars', [CarFilterController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
});

// Logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('landing');
})->name('logout');

