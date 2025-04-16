<!-- resources/views/cars/index.blade.php -->

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض السيارات المستعملة</title>

    <!-- رابط Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body style="direction: rtl; background-color: #f4f4f4;">
<div class="container mt-5">
    <h1 class="text-center mb-4">عرض السيارات المستعملة</h1>

    <form class="row g-3 mb-4" method="GET">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="اسم أو وصف" value="{{ request('search') }}">
        </div>
        <div class="col-md-2">
            <input type="number" name="model_year" class="form-control" placeholder="سنة الصنع" value="{{ request('model_year') }}">
        </div>
        <div class="col-md-2">
            <input type="number" name="price_min" class="form-control" placeholder="السعر من" value="{{ request('price_min') }}">
        </div>
        <div class="col-md-2">
            <input type="number" name="price_max" class="form-control" placeholder="السعر إلى" value="{{ request('price_max') }}">
        </div>
        <div class="col-md-2">
            <select name="brand_id" class="form-select">
                <option value="">كل البراندات</option>
                @foreach(\App\Models\Brand::all() as $brand)
                    <option value="{{ $brand->id }}" {{ request('brand_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select name="type_id" class="form-select">
                <option value="">كل الأنواع</option>
                @foreach(\App\Models\Type::all() as $type)
                    <option value="{{ $type->id }}" {{ request('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary">فلتر</button>
        </div>
    </form>

    <div class="row">
        @foreach($cars as $car)
            @php $images = is_array($car->images) ? $car->images : json_decode($car->images, true); @endphp
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if(!empty($images))
                        <img src="{{ asset('storage/' . $images[0]) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->title }}</h5>
                        <p class="card-text">{{ Str::limit($car->description, 100) }}</p>
                        <ul class="list-unstyled small">
                            <li><strong>الموديل:</strong> {{ $car->model_year }}</li>
                            <li><strong>السعر:</strong> {{ number_format($car->price) }} جنيه</li>
                            <li><strong>الكيلومترات:</strong> {{ number_format($car->mileage) }} كم</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $cars->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- إضافة مكتبة Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
