<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Used Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8.0.6/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', 'Rento')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .car-card {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
        }

        .swiper-container {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .swiper-button-next,
        .swiper-button-prev,
        .swiper-pagination {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .swiper-container:hover .swiper-button-next,
        .swiper-container:hover .swiper-button-prev,
        .swiper-container:hover .swiper-pagination {
            opacity: 1;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/"> Home  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact us</a>
                                </li>
                            </ul>

                            <!-- Conditional Button Display -->
                            <div class="sign_btn">
                                @if(Auth::check())
                                    <!-- If logged in, show Logout button -->
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <!-- If not logged in, show Login/Register button -->
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-4">
    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-md-3 mb-3">
            <form method="GET" action="{{ route('cars.index') }}">
                <div class="sidebar p-4 rounded-4 shadow-lg bg-light" style="position: sticky; top: 20px;">
                    <h3 class="mb-4 text-primary">🚗 <strong>Filter Cars</strong></h3>

                    <div class="mb-3">
                        <label class="form-label">Search by Description</label>
                        <input type="text" class="form-control" name="description" value="{{ request('description') }}" placeholder="Search by car description...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Model Year</label>
                        <div class="row g-2">
                            <div class="col">
                                <input type="number" class="form-control" name="min_year" placeholder="From" value="{{ request('min_year') }}" min="1900" max="{{ date('Y') }}">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" name="max_year" placeholder="To" value="{{ request('max_year') }}" min="1900" max="{{ date('Y') }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <select name="type_id" class="form-select">
                            <option value="">All</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ request('type_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <select name="brand_id" class="form-select">
                            <option value="">All</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ request('brand_id') == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Price Range</label>
                        <div id="price-slider"></div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Min: <span id="min-price">0</span> EGP</span>
                            <span>Max: <span id="max-price">5000000</span> EGP</span>
                        </div>
                        <input type="hidden" name="min_price" id="min_price_input" value="{{ request('min_price', 0) }}">
                        <input type="hidden" name="max_price" id="max_price_input" value="{{ request('max_price', 5000000) }}">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg text-uppercase">Apply</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Cars Display -->
        <div class="col-md-9" id="cars">
            <div class="row">
                @forelse($cars as $car)
                    <div class="col mb-4">
                        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                            <img src="{{ asset('storage/' . $car->images[0]) }}" class="card-img-top" alt="{{ $car->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $car->title }}</h5>
                                <strong><span class="badge bg-success">{{ $car->brand->name }}</span>
                                <strong><span class="badge bg-dark">{{ $car->type->name }}</span>
                                <p class="card-text">
                                    <strong>Description:</strong> {{ $car->description }}<br>
                                    <strong>Model Year:</strong> {{ $car->model_year }}<br>
                                    <strong>Price:</strong> {{ number_format($car->price) }} EGP<br>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No cars found 😢</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $cars->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cont_call">
                        <h3> <strong class="multi color_chang"> Call us Now</strong><br>
                            0123456789
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2025 All Rights Reserved.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.0/dist/nouislider.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const priceSlider = document.getElementById('price-slider');
        const minLabel = document.getElementById('min-price');
        const maxLabel = document.getElementById('max-price');
        const minInput = document.getElementById('min_price_input');
        const maxInput = document.getElementById('max_price_input');

        let minVal = parseInt(minInput.value || 0);
        let maxVal = parseInt(maxInput.value || 5000000);

        noUiSlider.create(priceSlider, {
            start: [minVal, maxVal],
            connect: true,
            range: {
                min: 0,
                max: 3000000
            },
            step: 1000,
            tooltips: [true, true],
            format: {
                to: value => Math.round(value),
                from: value => Number(value)
            }
        });

        priceSlider.noUiSlider.on('update', function (values) {
            minLabel.innerText = values[0];
            maxLabel.innerText = values[1];
            minInput.value = values[0];
            maxInput.value = values[1];
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    });
</script>
</body>
</html>
