<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;

class CarFilterController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->filled('description')) {
            $query->where('description', 'like', '%' . $request->description . '%')
                ->orWhere('title', 'like', '%' . $request->description . '%');
        }

        if ($request->filled('min_year')) {
            $query->where('model_year', '>=', $request->min_year);
        }

        if ($request->filled('max_year')) {
            $query->where('model_year', '<=', $request->max_year);
        }

        if ($request->filled('type_id')) {
            $query->where('type_id', $request->type_id);
        }

        if ($request->filled('brand_id')) {
            $query->where('brand_id', $request->brand_id);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $cars = $query->orderBy('id', 'desc')->paginate(6); // pagination

        return view('cars.index', [
            'cars' => $cars,
            'brands' => Brand::all(),
            'types' => Type::all(),
        ]);
    }
}
