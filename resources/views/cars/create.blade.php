<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <h2 class="mb-4">List your Car</h2>

    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Car Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="brand_id" class="form-label">Brand</label>
            <select name="brand_id" class="form-select @error('brand_id') is-invalid @enderror" id="brand_id">
                <option value="">Choose...</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                @endforeach
            </select>
            @error('brand_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Type</label>
            <select name="type_id" class="form-select @error('type_id') is-invalid @enderror" id="type_id">
                <option value="">Choose...</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
            @error('type_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="model_year" class="form-label">Model Year</label>
            <input type="number" name="model_year" class="form-control @error('model_year') is-invalid @enderror" id="model_year" value="{{ old('model_year') }}">
            @error('model_year')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mileage" class="form-label">Mileage</label>
            <input type="number" name="mileage" class="form-control @error('mileage') is-invalid @enderror" id="mileage" value="{{ old('mileage') }}">
            @error('mileage')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description (optional)</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Car Images</label>
            <input type="file" name="images[]" multiple class="form-control @error('images') is-invalid @enderror @error('images.*') is-invalid @enderror" id="images">
            @error('images')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            @error('images.*')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Car</button>
    </form>
</div>

</body>
</html>
