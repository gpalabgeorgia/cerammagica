<?php
    use App\Models\Section;
    $sections = Section::sections();
//    echo "<pre>"; print_r($sections); die;
?>
<div class="header-top-1">
    <div class="container">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+20866660112">+208-6666-0112</a>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <a href="mailto:info@example.com">info@example.com</a>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Sunday - Fri: 9 aM - 6 pM</span>
                </li>
            </ul>
            <ul class="list">
                <li><i class="fas fa-user"></i>
                    <button data-bs-toggle="modal" data-bs-target="#loginModal">
                        Iniciar sesión
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Main Header Section start  -->
<header class="header-1">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="#" class="header-logo">
                                    <img src="{{ asset('images/front_images/logo/white-logo.svg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="#">Inicio</a></li>
                                            @foreach($sections as $section)
                                                @if(count($section->categories)>0)
                                                    <li><a href="#">{{ $section->name }}</a><i class="fas fa-angle-down"></i>
                                                <ul class="submenu">
                                                    @foreach($section->categories as $category)
                                                    <li><a href="#">{{ $category->category_name }}</a></li>
                                                    @endforeach
{{--                                                    <li><a href="#">Listas</a></li>--}}
{{--                                                    <li><a href="#">Detalles</a></li>--}}
{{--                                                    <li><a href="#">Carrito</a></li>--}}
{{--                                                    <li><a href="#">Deseos</a></li>--}}
{{--                                                    <li><a href="#">Pagar</a></li>--}}
                                                </ul>
                                            </li>
                                                @endif
                                            @endforeach
                                            <li><a href="news.html">Blog</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="menu-cart">
                                <a href="shop-cart.html" class="cart-icon">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="{{ asset('images/front_images/icon/icon-13.svg') }}" alt="img">
                                        </div>
                                    </a>
                                </div>
                                <button type="button" class="theme-btn rounded-1" data-bs-toggle="modal" data-bs-target="#registrationModal">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
