<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarFilterController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::query()
            ->when($request->filled('search'), function ($q) use ($request) {
                $q->where('description', 'like', '%' . $request->search . '%');
            })
            ->when($request->filled('model_year'), function ($q) use ($request) {
                $q->where('model_year', $request->model_year);
            })
            ->when($request->filled('price_from'), function ($q) use ($request) {
                $q->where('price', '>=', $request->price_from);
            })
            ->when($request->filled('price_to'), function ($q) use ($request) {
                $q->where('price', '<=', $request->price_to);
            })
            ->when($request->filled('type_id'), function ($q) use ($request) {
                $q->where('type_id', $request->type_id);
            })
            ->when($request->filled('brand_id'), function ($q) use ($request) {
                $q->where('brand_id', $request->brand_id);
            })
            ->paginate(1);


        return view('cars.index', compact('cars'));
    }
}
