<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Smart Farmer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('shopassets/css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/logo-color.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

<!-- Preloader -->
{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <div class="loader-outter"></div>--}}
{{--        <div class="loader-inner"></div>--}}

{{--        <div class="indicator">--}}
{{--            <svg width="16px" height="12px">--}}
{{--                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Preloader -->


<header class="header">
    <!-- Topbar -->
    <!--  -->
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="/"><img src="img/logo-no-background.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav">
                        </div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="#">Get Involved</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Take action</a></li>
                                            <li>
                                                <a href="{{ url('/chatify') }}">Chat</a>
                                            </li>                                                <li><a href="index.html">Join the SmartFarmer</a></li>
                                            <li><a href="index.html">Support us</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Farming</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/fi') }}">Vegetable</a></li>
                                            <li><a href="index.html">Advice</a></li>


                                        </ul>
                                    </li>

                                    <li><a href="#"> Services </a></li>


                                    <li><a href="contact.html">Shop</a></li>
                                    </li>
                                    <li>
                                        <a href="{{ url('/chatify') }}">Chat</a>
                                    </li>

                                    </li>

                                    <li><a href="contact.html">Contact</a></li>



                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/redirects') }}"
                                           class="font-semibold text-gray-600 hover:text-gray-900 focus:outline
                                            focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                            <p id="dd">Hi, {{ Auth::user()->name }}</p>
                                        </a>
                                    @else
                                        <a class="btn" href="{{ route('login') }}"
                                           class="font-semibold text-gray-600 hover:text-gray-900 focus:outline
                                            focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                            in</a>

                                        @if (Route::has('register'))
                                            <a class="btn" href="{{ route('register') }}"
                                               class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline
                                                 focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif
                                    @endauth




                                    <div class="relative">
                                        @if(Auth::check())
                                            <button onclick="toggleDropdown()" class="inline-flex items-center text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="margin-left: 10px; margin-top:4px;">
                                                <img src="{{ Auth::user()->profile_photo_url }}" alt="User Profile" class="h-8 w-8 rounded-full object-cover mr-2" />
                                                <svg class="-me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        @endif


                                        <!-- Dropdown Content -->
                                        <div id="dropdownContent" class="absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100"
                                             style="display: none;">
                                            <!-- Account Management -->
                                            <div onclick="manageAccount()"
                                                 class="block px-4 py-2 text-xs text-gray-400 cursor-pointer hover:bg-gray-100">
                                                {{ __('Manage Account') }}
                                            </div>

                                            <a href="{{ route('profile.show') }}"
                                               class="block px-4 py-2 text-xs text-gray-900 hover:bg-gray-100">{{ __('Profile') }}</a>

                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <a href="{{ route('api-tokens.index') }}"
                                                   class="block px-4 py-2 text-xs text-gray-900 hover:bg-gray-100">{{ __('API Tokens') }}</a>
                                            @endif

                                            <div class="border-t border-gray-200"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit"
                                                        class="block w-full px-4 py-2 text-left text-xs text-gray-900 hover:bg-gray-100">{{ __('Log Out') }}</button>
                                            </form>
                                        </div>
                                    </div>

                                    <script>
                                        function toggleDropdown() {
                                            var dropdownContent = document.getElementById("dropdownContent");
                                            dropdownContent.style.display = (dropdownContent.style.display === "none") ? "block" : "none";
                                        }

                                        function manageAccount() {
                                            // Add your logic for handling the 'Manage Account' click
                                            alert("Manage Account Clicked!");
                                        }
                                    </script>
                                </div>


                            @endif
                            {{-- <a href="appointment.html" class="btn">Login</a> --}}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>


{{ $slot }}

<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>About Us</h2>
                        <p>Discover excellence with us. We're your dedicated source for quality services and expert
                            guidance, committed to your success</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Quick Links</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                       aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About
                                            Us</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                       aria-hidden="true"></i>Services</a></li>
                                    <!-- <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	 -->
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                       aria-hidden="true"></i>Consuling</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                       aria-hidden="true"></i>Finance</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                       aria-hidden="true"></i>Testimonials</a></li>
                                    <!-- <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li> -->
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact
                                            Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Open Hours</h2>
                        <img src="img/24-hours.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Newsletter</h2>
                        <p>Stay informed and inspired! Sign up for our newsletter to receive the latest updates,
                            exclusive offers, and valuable insights directly to your inbox</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Email Address" class="common-input"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                   required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2018 | All Rights Reserved by Irosha Rajapaksha</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- jquery Min JS -->
<script src="js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="js/easing.js"></script>
<!-- Color JS -->
<script src="js/colors.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="js/steller.js"></script>
<!-- Wow JS -->
<script src="js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>
