<form method="GET" action="/cars">
    <select name="brand">
        <option value="">All Brands</option>
        @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>
                {{ $brand->name }}
            </option>
        @endforeach
    </select>

    <select name="type">
        <option value="">All Types</option>
        @foreach($types as $type)
            <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                {{ $type->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Filter</button>
</form>

<hr>

<div style="display: flex; flex-wrap: wrap;">
@foreach($cars as $car)
    <div style="border: 1px solid #ddd; margin: 10px; padding: 10px; width: 300px;">
        <h3>{{ $car->title }}</h3>
        <p><strong>Brand:</strong> {{ $car->brand->name }}</p>
        <p><strong>Type:</strong> {{ $car->type->name }}</p>
        <p><strong>Price:</strong> ${{ $car->price }}</p>

        @if($car->images->count())
            <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" width="100%">
        @endif
    </div>
@endforeach
</div>

