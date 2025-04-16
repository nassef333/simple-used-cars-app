<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    use HasFactory;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name' => 'Opel']);
        Brand::create(['name' => 'Honda']);

        Type::create(['name' => 'SUV']);
        Type::create(['name' => 'Sedan']);

        Car::create([
            'title' => 'Opel Astra 2018',
            'brand_id' => 1,
            'type_id' => 2,
            'model_year' => 2018,
            'price' => 320000,
            'mileage' => 85000,
            'description' => 'Good condition'
        ]);
    }
}
