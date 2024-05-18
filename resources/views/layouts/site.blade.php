<!doctype html>
<html class="no-js" lang="zxx">

<body>

    <head>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Smart Farmer</title>
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
        <meta name="description" content="Agriox HTML Template For Agriculture Farming Services" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link
            href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap"
            rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
        <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
        <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
        <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
        <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
        <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
        <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
        <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
        <link rel="stylesheet" href="/assets/vendors/icomoon-icons/style.css">
        <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
        <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
        <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
        <link rel="stylesheet" href="/assets/vendors/twentytwenty/twentytwenty.css" />

        <!-- template styles -->
        <link rel="stylesheet" href="/assets/css/agriox.css" />

        <!-- RTL CSS -->
        <link rel="stylesheet" href="/assets/css/agriox-rtl.css">


        <!-- mode css -->
        <link rel="stylesheet" id="jssMode" href="/assets/css/modes/agriox-light.css">

        <!-- toolbar css -->
        <link rel="stylesheet" href="/assets/vendors/toolbar/css/toolbar.css">


    </head>

    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="language-feature">
            <button class="ltr-switcher" data-href="#googtrans(en|en)">LTR</button><!-- /.ltr-switcher -->
            <button class="rtl-switcher" data-href="#googtrans(en|ar)">RTL</button><!-- /.rtl-switcher -->
        </div><!-- /.language-feature -->
        <div class="layout-feature" id="colorMode">
            <a href="#" class="dark-switcher" data-theme="agriox-dark">Dark</a>
            <a href="#" class="light-switcher" data-theme="agriox-light">Light</a>
            <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
        </div><!-- /.language-feature -->
    </div>

    {{-- <div class="preloader">
		<img class="preloader__image" width="300" src="{{ asset('img/logo-no-background.png') }}" alt="" />
	</div> <!-- /.preloader -->
	<div class="page-wrapper"> --}}

    <div class="page-wrapper">

        <header class="main-header main-header--one  clearfix">
            <div class="main-header--one__wrapper">
                <div class="main-header--one__top clearfix">
                    <div class="auto-container">

                        <div class="main-header--one__top-left">
                            <div class="text">
                                <p>Welcome to Smart Farmer</p>
                            </div>
                            <div class="social-link clearfix">
                                <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="main-header--one__top-right clearfix">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">SmartFarmer@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="main-header--one__bottom clearfix">
                    <div class="auto-container">
                        <div class="main-header--one__bottom-inner">
                            <nav class="main-menu main-menu--1">
                                <div class="main-menu__inner">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                    <div class="stricky-one-logo">
                                        <div class="logo">
                                            <a href="index-main.html">
                                                <img class="dark-logo" src="{{ asset('img/logo-no-background.png') }}"
                                                    alt="" style="width: 180px">
                                                <img class="light-logo" src="assets/images/resources/logo-2.png"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="main-header--one__bottom-left">
                                        <ul class="main-menu__list">
                                            <li class="dropdown megamenu">
                                                <a href="/">Home</a>

                                            </li>
                                            {{-- <li><a href="about.html">About</a></li> --}}
                                            <li class="dropdown">
                                                <a>Services</a>
                                                <ul>
                                                    <li><a href="{{ url('/ads') }}">Look At The Vegetables Buyers</a></li>
                                                    <li><a href="{{ url('/vegesell') }}">Sell Vegetables</a></li>

                                                    <li><a href="{{ url('/vegetables') }}">Grow Vegetables</a>
                                                    </li>
                                                    <li><a href="{{ url('/export your vegetables') }}">Export Your
                                                            Vegetables</a></li>
                                                    {{-- if only user id = 2 ,then show this li  --}}
                                                    @if (auth()->check() && auth()->user()->role->value == 2)
                                                    <li><a href="{{ url('/buyers') }}">Create Your Advertisement</a></li>
                                                @endif


                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="{{ url('/farming') }}">Farming</a>
                                                <ul>
                                                    <li><a href="farmers.html">Farmers</a></li>
                                                    <li><a href="projects-details.html">Projects Details</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="{{ url('/shop') }}">Shop</a>
                                                <ul>
                                                    <li><a href="{{ url('/shop') }}">All Products</a></li>
                                                    <li><a href="{{ url('my-orders') }}">My Orders</a></li>
                                                    <li><a href="projects-details.html">Wishlist</a></li>
                                                    <li><a href="{{ url('cart') }}">Cart</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Chat</a>
                                                <ul>
                                                    <li class="dropdown">
                                                        <a href="{{ url('/messages') }}">Chat With All Farmers</a>

                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/chatify') }}">Chat Private</a>

                                                    </li>
                                                    <li><a href="https://calendly.com/iro7899rajapaksha/book-guider">Book
                                                            Oure Guides</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li><a href="contact.html">Contact</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <div class="main-header--one__bottom-middel">
                                <div class="logo">
                                    <a href="index-main.html">
                                        <img class="dark-logo" src="{{ asset('img/logo-no-background.png') }}"
                                            alt="" style="width: 190px">
                                        <img class="light-logo" src="{{ asset('img/logo-no-background.png') }}"
                                            alt="" style="width: 190px">
                                    </a>

                                </div>
                            </div>

                            <div class="main-header--one__bottom-right clearfix">
                                <div class="search-cart">
                                    <a href="#" class="search search-toggler"><span
                                            class="icon-magnifying-glass"></span></a>

                                    <a href="{{ url('cart') }}" class="relative inline-block"
                                        style="margin-right: 6px">
                                        <span class="icon-shopping-cart text-2xl"></span>
                                        <span
                                            class="cart-amount absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white  rounded-full cart-count"
                                            style="background-color: green"></span>
                                    </a>

                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/user/profile') }}" style="width: 60px; ">
                                                <img src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" class="rounded-full"
                                                    style="margin-left: 8px; margin-bottom:-8px">
                                            </a>

                                            <a>
                                                <form method="post" action="{{ route('logout') }}" x-data>
                                                    @csrf
                                                    <button type="submit" @click.prevent="$root.submit();"
                                                        style="border: none;">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" style="margin-left: 10px">
                                                <i class="fas fa-user"></i>
                                            </a>

                                        @endauth
                                    @endif

                                    @if (Auth::check() == false)
                                        <div class="hamburger-menu d-block d-xl-none">
                                            <div class="hamburger-inner">
                                                <div class="icon open-menu"><i class="fal fa-bars"></i></div>
                                            </div>
                                        </div>
                                    @endif



                                </div>

                                <div class="contact-box">
                                    <div class="icon">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Anytime</p>
                                        <a href="tel:123456789">+9477 684 0032</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->






        {{ $slot }}
        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-wrapper">
                                <div class="footer-one__bg"><img
                                        src="https://pixydrops.com/agriox/assets/images/backgrounds/footer-one-bg.png"
                                        alt="" /></div>
                                <div class="row">
                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp"
                                        data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="https://pixydrops.com/agriox/index-main.html"><img
                                                        src="https://pixydrops.com/agriox/assets/images/resources/footer-logo.png"
                                                        alt=""></a>
                                            </div>
                                            <p class="footer-widget__about-text">Lorem ipsum dolor sit amet consect
                                                etur
                                                adi pisicing elit sed.</p>
                                            <div class="footer-widget__about-contact-box">
                                                <p class="phone"><a href="tel:123456789"><i
                                                            class="fas fa-phone-square-alt"></i>+92 666 888 0000</a>
                                                </p>
                                                <p><a href="mailto:needhelp@company.com"><i
                                                            class="fa fa-envelope"></i>needhelp@company.com</a></p>
                                                <p class="text"><i class="fas fa-map-marker-alt"></i>666 road,
                                                    broklyn
                                                    street new york</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp"
                                        data-wow-delay="0.3s">
                                        <div class="footer-widget__column footer-widget__news">
                                            <h2 class="footer-widget__title">News</h2>
                                            <ul class="footer-widget__news-list">
                                                <li class="footer-widget__news-list-item">
                                                    <div class="footer-widget__news-list-item-img">
                                                        <img src="https://pixydrops.com/agriox/assets/images/resources/footer-widget-news-img1.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="footer-widget__news-list-item-title">
                                                        <p>20 Jul, 2021</p>
                                                        <h5><a href="#">A Clean Water Gives More<br> Good
                                                                Taste</a></h5>
                                                    </div>
                                                </li>

                                                <li class="footer-widget__news-list-item">
                                                    <div class="footer-widget__news-list-item-img">
                                                        <img src="https://pixydrops.com/agriox/assets/images/resources/footer-widget-news-img2.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="footer-widget__news-list-item-title">
                                                        <p>20 Jul, 2021</p>
                                                        <h5><a href="#">A Clean Water Gives More<br> Good
                                                                Taste</a></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp"
                                        data-wow-delay="0.5s">
                                        <div class="footer-widget__column footer-widget__explore">
                                            <h2 class="footer-widget__title">Explore</h2>
                                            <ul class="footer-widget__explore-list">
                                                <li class="footer-widget__explore-list-item"><a
                                                        href="https://pixydrops.com/agriox/projects.html">New
                                                        Projects</a></li>
                                                <li class="footer-widget__explore-list-item"><a
                                                        href="https://pixydrops.com/agriox/services.html">Our
                                                        Services</a></li>
                                                <li class="footer-widget__explore-list-item"><a
                                                        href="https://pixydrops.com/agriox/about.html">About
                                                        Us</a></li>
                                                <li class="footer-widget__explore-list-item"><a href="#">Get in
                                                        Touch</a></li>
                                                <li class="footer-widget__explore-list-item"><a
                                                        href="#">Volunteers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp"
                                        data-wow-delay="0.7s">
                                        <div class="footer-widget__column footer-widget__newletter">
                                            <h2 class="footer-widget__title">Newletter</h2>
                                            <p class="footer-widget__newletter-text">Sign up now to get daily latest
                                                news & updates from us</p>
                                            <form class="subscribe-form" action="#">
                                                <input type="email" name="email" placeholder="Email address">
                                                <button type="submit">Go</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text">
                                    <p>&copy; Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                                </div>
                                <div class="footer-one__bottom-social-links">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->


    </div><!-- /.page-wrapper -->





    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="https://pixydrops.com/agriox/index-main.html" aria-label="logo image"><img
                        src="https://pixydrops.com/agriox/assets/images/resources/mobilemenu_logo.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">SmartFarmer@Gmail.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">+9477 684 003 2</a>
                </li>
                <li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/user/profile') }}" style="width: 30px; ">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                    class="rounded-full" style="margin-left: 8px; margin-bottom:-8px">
                            </a>

                            <a>
                                <form method="post" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit" @click.prevent="$root.submit();"
                                        style="border: none; margin-left: 30px; color:white; margin-top: 10px; ">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </button>
                                </form>
                            </a>
                        @else
                            <a href="{{ route('login') }}" style="margin-left: 20px">
                                <i class="fas fa-user"></i>
                            </a>

                        @endauth
                    @endif
                </li>

            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->






















    <script src="https://pixydrops.com/agriox/assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/odometer/odometer.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/swiper/swiper.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/wow/wow.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/isotope/isotope.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/countdown/countdown.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/parallax/parallax.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/tilt.js/tilt.jquery.js"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="https://pixydrops.com/agriox/assets/js/agriox.js"></script>


    <!-- toolbar js -->
    <script src="https://pixydrops.com/agriox/assets/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/toolbar/js/toolbar.lang.js"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://pixydrops.com/agriox/assets/vendors/toolbar/js/toolbar.js"></script>



    {{-- message --}}
    <script src="{{ asset('/js/chat.js') }}"></script>


    <!--Start of Tawk.to Script-->

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/661be3b9a0c6737bd12ba60e/1href351m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="shopassets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            cartCount();
            $('#Search_products').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ url('product-list') }}",
                        type: 'GET',
                        data: {
                            term: request.term
                        },
                        dataType: 'json',
                        success: function(data) {
                            var resp = $.map(data, function(obj) {
                                return obj.name;
                            });
                            response(resp);
                        }
                    });
                },
                minLength: 1
            });
        });


        function cartCount() {
            $.ajax({
                method: 'GET',
                url: "{{ url('cart-count') }}",

                success: function(response) {
                    $('.cart-count').html('');
                    $('.cart-count').html(response.count);
                    console.log(response.count);
                }
            });
        }
    </script>


</body>

</html>
