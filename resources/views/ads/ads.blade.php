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
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('shopassets/css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="/img/logo-color.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

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

</head>

<body>

    <!-- Preloader -->
    {{-- <div class="preloader"> --}}
    {{--    <div class="loader"> --}}
    {{--        <div class="loader-outter"></div> --}}
    {{--        <div class="loader-inner"></div> --}}

    {{--        <div class="indicator"> --}}
    {{--            <svg width="16px" height="12px"> --}}
    {{--                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline> --}}
    {{--                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline> --}}
    {{--            </svg> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
    <!-- End Preloader -->


    <header class="header">
        <!-- Topbar -->

        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12">
                                <!-- Start Logo -->
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('img/logo-no-background.png') }}"
                                            alt="#"></a>

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
                                                    </li>
                                                    <li><a href="index.html">Join the SmartFarmer</a></li>
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


                                            <li><a href="{{ url('shop') }}">Shop</a></li>
                                            </li>
                                            <li><a href="#">Chat</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{url('/messages')}}">Chat With All Farmers</a></li>
                                                    <li>
                                                        <a href="{{ url('/chatify') }}">Chat Private </a>
                                                    </li>
                                                    <li><a href="index.html">Book Our Guides</a></li>

                                                </ul>
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
                                        <div class="sm:fixed sm:top-0   text-right z-10"
                                            style="margin-left: 10px; margin-top:28px">
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

                                        </div>


                                    @endif
                                    {{-- <a href="appointment.html" class="btn">Login</a> --}}
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>















{{-- cart section --}}











    <div class="container py-5">
        <!-- For Demo Purpose-->
        <header class="text-center mb-5">
          <h1 class="display-4 font-weight-bold">Look At The Best Buyers Here.</h1>
          <p class="font-italic text-muted mb-0">Browse through our diverse range of buyers in this section.</p>
          </p>
        </header>

        {{-- filtering systerm Filter City , Vegetble with filter button --}}




        <div class="row pb-5 mb-4">

            @foreach ($ads as $ads)

          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4"><a href="{{ url('viewadds/' . $ads->id) }}"><img src="{{ asset('uploads/shopads/' . $ads->image) }}" alt="" class="img-fluid d-block mx-auto mb-3"></a>
                <h5> <a href="{{ url('viewadds/' . $ads->id) }}" class="text-dark">Name: {{$ads->user_name}}</a></h5>
                <p class="small text-muted font-italic">Shop Name: {{$ads->user_name}}</p>
                <p class="small text-muted font-italic">City: {{$ads->user_name}}</p>

                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach


        </div>








