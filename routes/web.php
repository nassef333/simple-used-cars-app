<?php

use App\Http\Controllers\CarFilterController;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cars', [CarFilterController::class, 'index'])->name('cars.index');

