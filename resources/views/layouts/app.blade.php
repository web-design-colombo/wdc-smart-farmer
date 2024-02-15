<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="/js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="/js/easing.js"></script>
    <!-- Color JS -->
    <script src="/js/colors.js"></script>
    <!-- Popper JS -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="/js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="/js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="/js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="/js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="/js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="/js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="/js/steller.js"></script>
    <!-- Wow JS -->
    <script src="/js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="/js/main.js"></script>

        <!-- Styles -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Site keywords here">
        <meta name="description" content="">
        <meta name='copyright' content=''>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->

        <!-- Favicon -->
        <link rel="icon" href="img/logo.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/css/nice-select.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <!-- icofont CSS -->
        <link rel="stylesheet" href="/css/icofont.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="/css/slicknav.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="/css/owl-carousel.css">
        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="/css/datepicker.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/css/animate.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/css/magnific-popup.css">

        <!-- Medipro CSS -->
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/css/responsive.css">

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            @include('layouts.header')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


        </div>

        @stack('modals')

        @livewireScripts
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
                                            <li><a href="#"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>About Us</a></li>
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
                                            <li><a href="#"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>Contact Us</a></li>
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
    </body>
</html>
