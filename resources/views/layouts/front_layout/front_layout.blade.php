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
<!-- Cursor follower -->
<div class="cursor-follower"></div>

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<!-- Offcanvas Area start  -->
@include('layouts.front_layout.front_sidebar')

@include('layouts.front_layout.front_header')

@include('front.banners.home_banner')

@yield('content')

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
