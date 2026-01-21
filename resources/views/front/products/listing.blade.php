<!DOCTYPE html>
<html lang="es">
<!--<< Header Area >>-->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Bookle - Book Store WooCommerce Html Template ">
    <!-- ======== Page title ============ -->
    <title>CERAMMAGICA</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ url('images/front_images/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/nice-select.css') }}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/icomoon.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ url('css/front_css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
<!-- Offcanvas Area start  -->
@include('layouts.front_layout.front_sidebar')

@include('layouts.front_layout.front_header')
<!-- Cursor follower -->
<div class="cursor-follower"></div>

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>
    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{ asset('images/front_images/hero/book1.png') }}" alt="book">
        </div>
        <div class="book2">
            <img src="{{ asset('images/front_images/hero/book2.png') }}" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Tienda</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="active">{{ $categoryDetails['catDetails']['category_name'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Search</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Search here">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-arts-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-arts" type="button" role="tab"
                                                    aria-controls="pills-arts" aria-selected="true">Arts &
                                                Photography</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-Biographies" type="button" role="tab"
                                                    aria-controls="pills-Biographies" aria-selected="false">Biographies &
                                                Memoirs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ChristianBooks-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-ChristianBooks" type="button" role="tab"
                                                    aria-controls="pills-ChristianBooks" aria-selected="false">Christian
                                                Books & Bibles</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ResearchPublishing-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-ResearchPublishing"
                                                    type="button" role="tab" aria-controls="pills-ResearchPublishing"
                                                    aria-selected="false">Research & Publishing Guides</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-SportsOutdoors-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-SportsOutdoors" type="button" role="tab"
                                                    aria-controls="pills-SportsOutdoors" aria-selected="false">Sports &
                                                Outdoors</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-FoodDrink-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-FoodDrink" type="button" role="tab"
                                                    aria-controls="pills-FoodDrink" aria-selected="false">Food &
                                                Drink</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                 aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    @foreach($categoryProducts as $product)
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html">
                                                        <?php $product_image_path = 'images/product_images/large/'.$product['main_image']; ?>
                                                    @if(!empty($product['main_image']) && file_exists($product_image_path))
                                                        <img src="{{ asset($product_image_path) }}" alt="img">
                                                    @endif
                                                </a>
{{--                                                recomended size: 130X196px--}}
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="shop-details.html">{{ $product['product_name'] }}</a></h3>
                                                <ul class="price-list">
                                                    <li>{{ $product['product_price'] }} €.</li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class="previous" href="shop.html">Previous</a></li>
                                <li><a class="page-numbers" href="shop.html">1</a></li>
                                <li><a class="page-numbers" href="shop.html">2</a></li>
                                <li><a class="page-numbers" href="shop.html">3</a></li>
                                <li><a class="page-numbers" href="shop.html">...</a></li>
                                <li><a class="next" href="shop.html">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Footer Section start  -->
@include('layouts.front_layout.front_footer')
<!--<< All JS Plugins >>-->
<script src="{{ url('js/front_js/jquery-3.7.1.min.js') }}"></script>
<!--<< Viewport Js >>-->
<script src="{{ url('js/front_js/viewport.jquery.js') }}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ url('js/front_js/bootstrap.bundle.min.js') }}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ url('js/front_js/jquery.nice-select.min.js') }}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ url('js/front_js/jquery.waypoints.js') }}"></script>
<!--<< Counterup Js >>-->
<script src="{{ url('js/front_js/jquery.counterup.min.js') }}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ url('js/front_js/swiper-bundle.min.js') }}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ url('js/front_js/jquery.meanmenu.min.js') }}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ url('js/front_js/jquery.magnific-popup.min.js') }}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ url('js/front_js/wow.min.js') }}"></script>
<!-- Gsap -->
<script src="{{ url('js/front_js/gsap.min.js') }}"></script>
<!--<< Main.js >>-->
<script src="{{ url('js/front_js/main.js') }}"></script>
</body>
</html>
