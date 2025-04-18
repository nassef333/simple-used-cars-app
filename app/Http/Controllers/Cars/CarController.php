<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create()
    {
        return view('cars.create', [
            'brands' => Brand::all(),
            'types' => Type::all(),
            'users' => User::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'brand_id'    => 'required|exists:brands,id',
            'type_id'     => 'required|exists:types,id',
            'model_year'  => 'required|integer',
            'price'       => 'required|numeric',
            'mileage'     => 'required|numeric',
            'description' => 'nullable|string',
            'images'      => 'nullable|array',
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $validated['user_id'] = auth()->id(); // أو auth()->user()->id


        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('cars', 'public');
            }
        }

        $validated['images'] = $imagePaths;
        $car = Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }
}
