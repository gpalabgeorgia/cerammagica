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
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                           id="saveForNext">
                                    <label for="saveForNext">Remember me</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Forgot Your password?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Log in </a>
                            </div>
                            <div class="orting-badge">
                                Or
                            </div>
                            <button type="button" class="theme-btn rounded-1 loginBtn" data-bs-toggle="modal" data-bs-target="#registrationModal">Sign Up</button>
                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    I Accept Your Terms & Conditions
                                </label>
                            </div>
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
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                           id="rememberMe">
                                    <label for="rememberMe">Remember me</label>
                                </div>
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

    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="bg-shape1">
                            <img src="{{ asset('images/front_images/hero/bg-shape.png') }}" alt="img">
                        </div>
                        <div class="bg-shape2">
                            <img src="{{ asset('images/front_images/hero/bg-shape2.png') }}" alt="shape-img">
                        </div>
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Nombre y apellido del autor</h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aut eius illum ipsa molestias natus nobis officia perferendis possimus provident quae quam quidem repudiandae sapiente tenetur! Aliquam architecto consectetur dicta expedita illo, iure, iusto laudantium quae repellendus reprehenderit tenetur totam! Amet aut nostrum nulla perferendis rem rerum? Iure, nesciunt, non?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class=" float-bob-x" src="{{ asset('images/front_images/hero/hero-girl.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <!-- Last Works  -->
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Últimos trabajos</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorar más <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('images/front_images/book/01.png') }}" alt="img"></a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">Nombre del producto </a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li><del>$39.99</del></li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('images/front_images/book/01.png') }}" alt="img"></a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">Nombre del producto </a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li><del>$39.99</del></li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('images/front_images/book/01.png') }}" alt="img"></a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">Nombre del producto </a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li><del>$39.99</del></li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('images/front_images/book/01.png') }}" alt="img"></a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">Nombre del producto </a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li><del>$39.99</del></li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('images/front_images/book/01.png') }}" alt="img"></a>
                            </div>
                            <div class="shop-content">
                                <h3><a href="shop-details.html">Nombre del producto </a></h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li><del>$39.99</del></li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
