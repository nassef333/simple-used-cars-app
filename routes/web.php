<?php

use App\Models\Brand;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cars', function () {
    $brands = Brand::all();
    $types = Type::all();

    $cars = Car::with(['brand', 'type', 'images'])
        ->when(request('brand'), fn ($q) => $q->where('brand_id', request('brand')))
        ->when(request('type'), fn ($q) => $q->where('type_id', request('type')))
        ->get();

    return view('cars', compact('cars', 'brands', 'types'));
});
