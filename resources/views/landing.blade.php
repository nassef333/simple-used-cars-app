<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
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
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<!-- header -->
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
<!-- end header -->
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-12">
                <div class="text-bg">
                    <h1>Find the Best Used Cars Here for Rent or Sale</h1>
                    <strong>Buy, Sell, or Rent – Your Car Marketplace</strong>
                    <span>Discover a variety of cars tailored to your needs</span>
                    <p>
                        Whether you're looking to sell your car, rent one, or buy a used vehicle, our platform connects you with trusted sellers and offers great deals. Publish your car or find the perfect one today!
                    </p>
                    <a href="{{ route('cars.create') }}">Start Listing Your Car Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- end banner -->
<!-- car -->
<div class="car">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Explore Our Collection of Cars</h2>
                    <span>Discover a wide variety of high-quality cars that suit every need and style. From sporty models to family-friendly rides, we've got you covered!</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 padding_leri">
                <div class="car_box">
                    <figure><img src="images/car_img1.png" alt="Hundai Car Image"/></figure>
                    <h3>Hundai</h3>
                    <p>Experience the perfect blend of style and performance with Hyundai.</p>
                </div>
            </div>
            <div class="col-md-4 padding_leri">
                <div class="car_box">
                    <figure><img src="images/car_img2.png" alt="Audi Car Image"/></figure>
                    <h3>Audi</h3>
                    <p>Luxury meets innovation in every Audi vehicle.</p>
                </div>
            </div>
            <div class="col-md-4 padding_leri">
                <div class="car_box">
                    <figure><img src="images/car_img3.png" alt="BMW X5 Car Image"/></figure>
                    <h3>BMW X5</h3>
                    <p>Step into the world of performance and luxury with the BMW X5.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end car -->
<!-- bestCar -->
<div id="contact" class="bestCar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <form class="main_form">
                            <div class="titlepage">
                                <h2>Find A  Best Car For Rent</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('cars.index') }}" class="find_btn text-center">Find Now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end bestCar -->
<!-- choose  section -->
<div class="choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Why Choose Us?</h2>
                    <span>We offer exceptional services and products that stand out in the market. Here's why our clients love us:</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="choose_box">
                    <span>01</span>
                    <p>We are committed to delivering high-quality products that meet the needs of our customers. Our attention to detail and dedication ensures that we always exceed expectations.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="choose_box">
                    <span>02</span>
                    <p>Our team of experts provides personalized services that cater to each customer's unique needs. We strive to build lasting relationships through exceptional customer support and trust.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="choose_box">
                    <span>03</span>
                    <p>We constantly innovate and stay ahead of industry trends to provide cutting-edge solutions. Our forward-thinking approach ensures that we are always ready for tomorrow’s challenges.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end choose  section -->
<!-- cutomer -->
<div class="cutomer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>What is says our cutomer</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="cross_img">
                                        <figure><img src="images/cross_img.png" alt="#"/></figure>
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test_box">
                                            <h4>Due markes</h4>
                                            <span>Rental</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                            <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="cross_img">
                                        <figure><img src="images/cross_img.png" alt="#"/></figure>
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test_box">
                                            <h4>Due markes</h4>
                                            <span>Rental</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                            <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="cross_img">
                                        <figure><img src="images/cross_img.png" alt="#"/></figure>
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test_box">
                                            <h4>Due markes</h4>
                                            <span>Rental</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                            <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cutomer -->
<!--  footer -->
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
<!-- end footer -->
<!-- Javascript files-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/plugin.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>

