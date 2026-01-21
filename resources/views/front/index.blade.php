<?php
    use App\Models\Banner;
    $banners = Banner::getBanners();
?>
@extends('layouts.front_layout.front_layout')
@section('content')
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="loginModalLabel">¡Bienvenido de nuevo!</h1>
                            <input class="inputField" type="email" name="email" placeholder="Email Address">
                            <input class="inputField" type="password" name="password" placeholder="Enter Password">
                            <div class="input-check remember-me">
                                <div class="text"> <a href="index-2.html">Forgot Your password?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Log in </a>
                            </div>
                            <div class="orting-badge">
                                Or
                            </div>
                            <button type="button" class="theme-btn rounded-1 loginBtn" data-bs-toggle="modal" data-bs-target="#registrationModal">Sign Up</button>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Log in</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                    data-bs-target="#registrationModal">Create
                                Account</button>
                            <div class="loginBg">
                                <img src="{{ asset('images/front_images/signUpbg.jpg') }}" alt="signUpBg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="registrationModalLabel">Create account!</h1>
                            <input class="inputField" type="text" name="name" id="name" placeholder="User Name">
                            <input class="inputField" type="email" name="email" placeholder="Email Address">
                            <input class="inputField" type="password" name="password" placeholder="Enter Password">
                            <input class="inputField" type="password" name="password"
                                   placeholder="Enter Confirm Password">
                            <div class="input-check remember-me">
                                <div class="text"> <a href="index-2.html">Forgot Your password?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Register </a>
                            </div>
                            <div class="orting-badge">
                                Or
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Log in </a>
                            </div>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Log in</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                    data-bs-target="#registrationModal">Create
                                Account</button>
                            <div class="signUpBg">
                                <img src="{{ asset('images/front_images/registrationbg.jpg') }}" alt="signUpBg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="book-banner-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="banner-book-card-items bg-cover" style="background-image: url('{{ asset('images/front_images/banner/book-banner-1.jpg') }}');">
                        <div class="book-shape">
                            <img src="{{ asset('images/front_images/banner/book-1.png') }}" alt="img">
                        </div>
                        <div class="banner-book-content">
                            <h2>Mis trabajos</h2>
                            <a href="shop-details.html" class="theme-btn white-bg">Ver detalles <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="banner-book-card-items bg-cover" style="background-image: url('{{ asset('images/front_images/banner/book-banner-2.jpg') }}');">
                        <div class="book-shape">
                            <img src="{{ asset('images/front_images/banner/book-2.png') }}" alt="img">
                        </div>
                        <div class="banner-book-content">
                            <h2>Escuela</h2>
                            <a href="shop-details.html" class="theme-btn white-bg">Ver detalles <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="banner-book-card-items bg-cover" style="background-image: url('{{ asset('images/front_images/banner/book-banner-3.jpg') }}');">
                        <div class="book-shape">
                            <img src="{{ asset('images/front_images/banner/book-3.png') }}" alt="img">
                        </div>
                        <div class="banner-book-content">
                            <h2> Tienda </h2>
                            <a href="shop.html" class="theme-btn white-bg">Ver detalles <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container" style="max-height: 50%">
            <div class="section-title-area">
                <div class="section-title">
                    <!-- Last Works  -->
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Productos recomendados</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorar más <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider" style="max-height: 430px">
                @foreach($featuredItemsChunk as $key => $featuredItem)
                <div class="swiper-wrapper">
                    @foreach($featuredItem as $item)
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details">
                                    <?php $product_image_path = 'images/product_images/small/'.$item['main_image']; ?>
                                    @if(!empty($item['main_image']) && file_exists($product_image_path))
                                    <img src="{{ asset($product_image_path) }}" alt="img">
                                    @endif
                                </a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">{{ $item['product_name'] }}</a></h3>
                                <ul class="price-list">
                                    <li>{{ $item['product_price'] }} €</li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="featured-books-section pt-100 pb-145 fix section-bg">
        <div class="container">
            <div class="section-title-area justify-content-center">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2>Últimos trabajos</h2>
                </div>
            </div>
            <div class="swiper featured-books-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-e546d0a7ccfcc58a" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-3438px, 0px, 0px);">
                    @foreach($newProducts as $product)
                    <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 1116px; margin-right: 30px;">
                        <div class="shop-box-items style-4 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="book-thumb center">
                                <a href="shop-details">
                                    <?php $product_image_path = 'images/product_images/large/'.$product['main_image']; ?>
                                    @if(!empty($product['main_image']) && file_exists($product_image_path))
                                        <img style="width: 1040px;" src="{{ asset($product_image_path) }}" alt="img">
                                    @endif
                                </a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">{{ $product['product_name'] }}</a></h3>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="content">{{ $product['description'] }}</span>
                                    </li>
                                </ul>
                                <div class="book-availablity"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>
    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('images/front_images/book-categori/01.png') }}" alt="img">
                                    <div class="circle-shape">
                                        <img src="{{ asset('images/front_images/book-categori/circle-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> 01 </div>
                                <h3><a href="shop-details.html">Romance Books (80)</a></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('images/front_images/book-categori/02.png') }}" alt="img">
                                    <div class="circle-shape">
                                        <img src="{{ asset('images/front_images/book-categori/circle-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> 02 </div>
                                <h3><a href="shop-details.html">Design Low Book (6)</a></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('images/front_images/book-categori/03.png') }}" alt="img">
                                    <div class="circle-shape">
                                        <img src="{{ asset('images/front_images/book-categori/circle-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> 03 </div>
                                <h3><a href="shop-details.html">safe Home (5)</a></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('images/front_images/book-categori/04.png') }}" alt="img">
                                    <div class="circle-shape">
                                        <img src="{{ asset('images/front_images/book-categori/circle-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> 04 </div>
                                <h3><a href="shop-details.html">Grow flower (7)</a></h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('images/front_images/book-categori/05.png') }}" alt="img">
                                    <div class="circle-shape">
                                        <img src="{{ asset('images/front_images/book-categori/circle-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number"> 05 </div>
                                <h3><a href="shop-details.html">Adventure book (4)</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section start  -->
    <section class="top-ratting-book-section fix section-padding section-bg">
        <div class="container">
            <div class="top-ratting-book-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Rating Books</h2>
                    </div>
                    <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">View More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/01.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Simple Things You To Save BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/02.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">How Deal With Very Bad BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$39.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/03.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Qple GPad With Retina Sisplay</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/04.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Flovely and Unicom Erna</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$19.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/05.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">Castle In The Sky</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$16.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('images/front_images/top-book/06.png') }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5> Design Low Book </h5>
                                        <h3>
                                            <a href="shop-details.html">The Hidden Mystery Behind</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">

                                                <img class="icon" src="{{ asset('images/front_images/icon/shuffle.svg') }}" alt="svg-icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('images/front_images/testimonial/client-2.png') }}" alt="img">
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
