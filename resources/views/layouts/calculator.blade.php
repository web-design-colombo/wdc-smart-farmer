<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Farmer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /* Your existing styles here */
    </style>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <!-- Preloader content -->
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="/"><img src="img/logo.png" alt="#" style="max-width: 60%;"></a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="active"><a href="#">Get Involved<i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Take action</a></li>
                                                <li><a href="{{ url('/chatify') }}">Chat</a></li>
                                                <li><a href="index.html">Join the SmartFarmer</a></li>
                                                <li><a href="index.html">Support us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Farming<i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="{{ url('/fi') }}">Vegetable</a></li>
                                                <li><a href="index.html">Advice</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="contact.html">Shop</a></li>
                                        <li><a href="{{ url('/chatify') }}">Chat</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Calculator</a></li> <!-- Added Calculator link -->
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <!-- Your existing login/register code here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Content Area -->
    <div class="content">
        <!-- Your existing content here -->
        {{ $slot }}
    </div>
    <!-- End Content Area -->

    <!-- Footer Area -->
    <footer id="footer" class="footer">
        <!-- Your existing footer code here -->
    </footer>
    <!--/ End Footer Area -->

    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/colors.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/slicknav.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/niceselect.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/steller.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
