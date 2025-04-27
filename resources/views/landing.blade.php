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
    <title>@yield('title', 'سيارتي')</title>
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
<style>
    .cross_img img {
        max-width: 200px; /* أقصى عرض */
        max-height: 200px; /* أقصى ارتفاع */
        width: auto;
        height: auto;
        object-fit: cover; /* لو الصورة مش مناسبة، تقطع نفسها بشكل حلو */
        border-radius: 50%; /* يخلي الصورة دائرية لو حبيت */
        margin: auto;
    }
</style><!-- header -->

<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="images/logo.jpg" alt="#" /></a>
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
                                    <a class="nav-link" href="#about">About</a>
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
                    <a href="{{ route('cars.create') }}">Sell Your Car Now</a>
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
            <div class="col">
                <div class="row">
                    <div class="col">
                        <form class="main_form">
                            <div class="titlepage">
                                <h2>Find Your New Car</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ route('cars.index') }}" class="find_btn text-center" style="font-size: 45px">Find Now</a>
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
<!-- cutomer -->
<section id="about">
    <div class="cutomer" style="margin-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Meet Our Project Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide cutomer_Carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                        </ol>
                        <div class="carousel-inner">

                            <!-- Dr Marco (Supervisor) - First Active -->
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/DrMarco.jpg" alt="Dr Marco"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Dr Marco</h4>
                                                <span>Project Supervisor</span>
                                                <p>Guiding and evaluating the students throughout the project journey.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Yousri (Team Leader) -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/Yousri.jpg" alt="Yousri"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Ahmed Yousri Mohamed Sayed Ahmed</h4>
                                                <span>Team Leader</span>
                                                <p>Leading the project team with skill and vision.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- باقي الأعضاء بنفس الترتيب -->

                            <!-- Adham Zakaria -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/AdhamZakaria.jpg" alt="Adham Zakaria"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Adham Zakaria</h4>
                                                <span>Frontend Developer</span>
                                                <p>Working hard to deliver an amazing user interface.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ahmed Nasr -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/AhmedNasr.jpg" alt="Ahmed Nasr"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Ahmed Nasr</h4>
                                                <span>Backend Developer</span>
                                                <p>Building powerful and secure backend systems for the project.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ahmed Yousri -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/AhmedYousri.jpg" alt="Ahmed Yousri"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Ahmed Yousri Mohamed Mahmoud</h4>
                                                <span>Full Stack Developer</span>
                                                <p>Combining frontend and backend magic to create an amazing experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ehab -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/Ehab.jpg" alt="Ehab"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Ehab</h4>
                                                <span>UI/UX Designer</span>
                                                <p>Crafting intuitive and beautiful interfaces for users to enjoy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Youssif Amer -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/YoussifAmer.jpg" alt="Youssif Amer"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Youssif Amer</h4>
                                                <span>Backend Developer</span>
                                                <p>Ensuring robust APIs and seamless database connections.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Youssif Farhan -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/YoussifFarhan.jpg" alt="Youssif Farhan"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Youssif Farhan</h4>
                                                <span>Frontend Developer</span>
                                                <p>Delivering responsive and interactive interfaces for users.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Youssif Refaat -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="cross_img">
                                            <figure><img src="images/about/YoussifRefaat.jpg" alt="Youssif Refaat"/></figure>
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Youssif Refaat Saad Mahmoud</h4>
                                                <span>QA Tester</span>
                                                <p>Testing the project and ensuring everything works perfectly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
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
</section>

<!-- end cutomer -->
<!--  footer -->
<footer>
    <div class="footer">
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

