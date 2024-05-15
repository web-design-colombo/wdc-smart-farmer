{{-- <x-site-layout>



    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Portfolio Details</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Portfolio Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Portfolio Details Area -->
    @if ($Vegetable)
    <section class="pf-details section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content">
                        <div class="image-slider">
                            <div class="pf-details-slider">
                                <img src="{{ asset('/uploads/vegetables/' . $Vegetable->imagehome) }}" alt="#">
                                <img src="{{ asset('/uploads/vegetables/' . $Vegetable->imagehome) }}" alt="#">
                                <img src="{{ asset('/uploads/vegetables/' . $Vegetable->imagehome) }}" alt="#">
                            </div>
                        </div>
                        <div class="date">
                            <ul>
                                <li><span>Botanical Name :</span>{{$Vegetable->botanicalname}}</li>
                                <li><span>Common Name :</span>{{$Vegetable->name}}</li>
                                <li><span>Client :</span> Suke Agency</li>
                                <li><span>Ags :</span> Typo</li>
                            </ul>
                        </div>
                        <div class="body-text">
                            <div class="container mx-auto px-4 relative" style="margin-top: 3%; margin-bottom: 3%;  ">
                                <h5 class="text-gray-700 font-semibold" style="padding-top: 2%">Introducing...</h5><br>
                                <h2 class="text-3xl font-bold">{{$Vegetable->name}}</h2>

                                <div class="flex items-center mt-4">
                                    <h5 class="text-gray-700 mr-2">Botanical Name: </h5>
                                    <h5 class="text-green-600 font-semibold">{{$Vegetable->botanicalname}}</h5>
                                </div>

                                <!-- Back button -->
                                <a href="#"
                                    class="absolute top-0 right-0 mt-4 mr-4 bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-lg text-gray-800 font-semibold">Back</a>

                                <!-- New paragraph -->
                                <p class="mt-8 text-lg text-gray-700">{{$Vegetable->home_description}}</p>


                                <h2 class="text-3xl font-bold" style="margin-top: 3%; margin-bottom: 3%;">Growing guide</h2>


                                <div style="display: flex">
                                    <a href="#"
                                        class="flex items-center justify-between bg-white border border-gray-200 rounded-lg shadow-md md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 ease-in-out">

                                        <img class="w-1/2 h-auto md:h-full object-cover rounded-l-lg"
                                            src="{{ asset('uploads/product/3432166.jpg') }}" alt="Vegetable Name">
                                        <div class="flex flex-col w-1/2 p-4">
                                            <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">How To Grow {{$Vegetable->name}}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                                technology acquisitions of 2021 so far, in reverse chronological order.</p>

                                        </div>
                                    </a>

                                    <a style="margin-left: 20px" href="#"
                                        class="flex items-center justify-between bg-white border border-gray-200 rounded-lg shadow-md md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 ease-in-out">

                                        <img class="w-1/2 h-auto md:h-full object-cover rounded-l-lg"
                                            src="{{ asset('uploads/product/3432166.jpg') }}" alt="Vegetable Name">
                                        <div class="flex flex-col w-1/2 p-4">
                                            <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">How To Harvesting {{$Vegetable->name}}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                                technology acquisitions of 2021 so far, in reverse chronological order.</p>

                                        </div>
                                    </a>
                                </div>

                                <h2 class="text-3xl font-bold" style="margin-top: 3%; margin-bottom: 3%;">Browse Vegetable Name</h2>

                                <div style="display: flex">

                                //card


                                </div>


                            </div>
                                  <div class="share">
                                <h4>Share Now -</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endif






    </div>

</x-site-layout> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <header class="header">
        <!-- Topbar -->

        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="inner">
                        <div class="row" style="margin-left: 80px">
                            <div class="col-lg-3 col-md-3 col-12">
                                <!-- Start Logo -->
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('img/logo-no-background.png') }}"
                                            alt="#" style="height: 60px; max-width: 100%;"></a>

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
                                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                                <a href="{{ url('/') }}" style="text-decoration: none">Get Involved</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/index.html') }}" style="text-decoration: none">Take action</a></li>
                                                    <li><a href="{{ url('/chatify') }}" style="text-decoration: none">Chat</a></li>
                                                    <li><a href="{{ url('/join-smartfarmer') }}" style="text-decoration: none">Join the SmartFarmer</a></li>
                                                    <li><a href="{{ url('/support-us') }}" style="text-decoration: none">Support us</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Request::is('services') ? 'active' : '' }}">
                                                <a href="{{ url('/services') }}" style="text-decoration: none">Services</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/ads') }}" style="text-decoration: none">Sell Vegetables</a></li>
                                                    <li><a href="{{ url('/vegetables') }}" style="text-decoration: none">Grow Vegetables</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Request::is('farming') ? 'active' : '' }}">
                                                <a href="{{ url('/farming') }}" style="text-decoration: none">Farming</a>
                                            </li>
                                            <li class="{{ Request::is('shop') ? 'active' : '' }}">
                                                <a href="{{ url('/shop') }}" style="text-decoration: none">Shop</a>
                                            </li>
                                            <li class="{{ Request::is('chat') ? 'active' : '' }}">
                                                <a href="{{ url('/chat') }}" style="text-decoration: none">Chat</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/messages') }}">Chat With All Farmers</a></li>
                                                    <li><a href="{{ url('/chatify') }}">Chat Private</a></li>
                                                    <li><a href="https://calendly.com/iro7899rajapaksha/book-guider">Book Our Guides</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                                <a href="{{ url('/contact') }}" style="text-decoration: none">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <!-- Your page content goes here -->

                                <!-- Include your JavaScript at the end of the body -->
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        const currentUrl = window.location.href;
                                        const activeMenuItem = document.querySelector(`.menu a[href='${currentUrl}']`);
                                        if (activeMenuItem) {
                                            activeMenuItem.closest('li').classList.add('active');
                                            // If this is a dropdown item, also mark its parent as active
                                            const dropdownParent = activeMenuItem.closest('.dropdown');
                                            if (dropdownParent) {
                                                dropdownParent.closest('li').classList.add('active');
                                            }
                                        }
                                    });
                                </script>
                                <!--/ End Main Menu -->
                            </div>
                            <div class="col-lg-2 col-12">


                                <div class="get-quote">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0   text-right z-10"
                                            style="margin-left: 10px; margin-top:28px">
                                            @auth
                                                <a href="{{ url('/redirects') }}" style="text-decoration: none"
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

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Site keywords here">
        <meta name="description" content="">
        <meta name='copyright' content=''>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title -->
        <title>Smart Farmer</title>
        <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('shopassets/css/style.css') }}" type="text/css">

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




        <!-- google verification -->
        <meta name="google-site-verification" content="LQhqu9H3FudoFH_uBrzQlgKiFaFfklFUMQkPmaY86jk" />

        <!-- Favicon and Touch Icons-->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/site.webmanifest">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#03ab77">
        <meta name="msapplication-TileColor" content="#03ab77">
        <meta name="theme-color" content="#03ab77">

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5935796446046681"
            crossorigin="anonymous"></script>


        <!-- /Rank Math WordPress SEO plugin -->
        <link rel="stylesheet" href="{{ asset('shopassets/css/home.css') }}" type="text/css">

        <link rel="alternate" type="application/rss+xml"
            title="Forestry.com &raquo; How to Grow and Care for Potatoes: Essential Tips for Bountiful Harvests Comments Feed"
            href="https://forestry.com/wp/guides/how-to-grow-and-care-for-potatoes/feed/" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/forestry.com\/wp\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"
                }
            };
            /*! This file is auto-generated */
            ! function(i, n) {
                var o, s, e;

                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }

                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                            .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }

                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                                n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                    "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                    "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                        case "emoji":
                            return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                    }
                    return !1
                }

                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                            300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", {
                            willReadFrequently: !0
                        }),
                        o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }), o
                }

                function t(e) {
                    var t = i.createElement("script");
                    t.src = e, t.defer = !0, i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }), new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                                e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                            typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                            var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                    .toString()
                                ].join(",") + "));",
                                r = new Blob([e], {
                                    type: "text/javascript"
                                }),
                                a = new Worker(URL.createObjectURL(r), {
                                    name: "wpTestEmojiSupports"
                                });
                            return void(a.onmessage = function(e) {
                                c(n = e.data), a.terminate(), t(n)
                            })
                        } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }).then(function(e) {
                    for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                        .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                            .everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                        .DOMReady = !1, n.readyCallback = function() {
                            n.DOMReady = !0
                        }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                        .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
                }))
            }((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <style id='wp-emoji-styles-inline-css' type='text/css'>
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>

        <link rel='stylesheet' id='wp-block-library-css'
            href='https://forestry.com/wp/wp-includes/css/dist/block-library/style.min.css?ver=6.5.2' type='text/css'
            media='all' />
        <link rel='stylesheet' id='ideabox-star-rating-block-css'
            href='https://forestry.com/wp/wp-content/plugins/star-rating-block/build/style-index.css?ver=1697785440'
            type='text/css' media='all' />
        <style id='classic-theme-styles-inline-css' type='text/css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        <style id='global-styles-inline-css' type='text/css'>
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flow>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            body .is-layout-flow>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            body .is-layout-flow>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            body .is-layout-constrained>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            body .is-layout-constrained>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained>.alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            body .is-layout-flex>* {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            body .is-layout-grid>* {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <script type="application/json" id="wpp-json">

    {"sampling_active":0,"sampling_rate":100,"ajax_url":"https:\/\/forestry.com\/wp\/wp-json\/wordpress-popular-posts\/v1\/popular-posts","api_url":"https:\/\/forestry.com\/wp\/wp-json\/wordpress-popular-posts","ID":122822,"token":"16d251ac8c","lang":0,"debug":0}

    </script>
        <script type="text/javascript"
            src="https://forestry.com/wp/wp-content/plugins/wordpress-popular-posts/assets/js/wpp.min.js?ver=6.4.2"
            id="wpp-js-js"></script>
        <link rel="https://api.w.org/" href="https://forestry.com/wp/wp-json/" />
        <link rel="alternate" type="application/json" href="https://forestry.com/wp/wp-json/wp/v2/posts/122822" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD"
            href="https://forestry.com/wp/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.5.2" />
        <link rel='shortlink' href='https://forestry.com/wp/?p=122822' />
        <link rel="alternate" type="application/json+oembed"
            href="https://forestry.com/wp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforestry.com%2Fwp%2Fguides%2Fhow-to-grow-and-care-for-potatoes%2F" />
        <link rel="alternate" type="text/xml+oembed"
            href="https://forestry.com/wp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforestry.com%2Fwp%2Fguides%2Fhow-to-grow-and-care-for-potatoes%2F&#038;format=xml" />
        <meta name="cdp-version" content="1.3.9" />
        <style id="wpp-loading-animation-styles">
            @-webkit-keyframes bgslide {
                from {
                    background-position-x: 0
                }

                to {
                    background-position-x: -200%
                }
            }

            @keyframes bgslide {
                from {
                    background-position-x: 0
                }

                to {
                    background-position-x: -200%
                }
            }

            .wpp-widget-placeholder,
            .wpp-widget-block-placeholder,
            .wpp-shortcode-placeholder {
                margin: 0 auto;
                width: 60px;
                height: 3px;
                background: #dd3737;
                background: linear-gradient(90deg, #dd3737 0%, #571313 10%, #dd3737 100%);
                background-size: 200% auto;
                border-radius: 3px;
                -webkit-animation: bgslide 1s infinite linear;
                animation: bgslide 1s infinite linear
            }
        </style>
        <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","headline":"How to Grow and Care for Potatoes: Essential Tips for Bountiful Harvests","image":"https:\/\/forestry.com\/wp\/wp-content\/uploads\/2024\/05\/2-66.webp","datePublished":"2024-05-08T12:40:06+00:00","dateModified":"2024-05-08T12:40:06+00:00","author":[{"@type":"Person","name":"Kristine Moore","jobTitle":"Forestry Author","knowsAbout":"","url":"http:\/\/Forestry.com"}]}</script><noscript>
            <style id="rocket-lazyload-nojs-css">
                .rll-youtube-player,
                [data-lazy-src] {
                    display: none !important;
                }
            </style>
        </noscript>
        <style>
            .wp-block-columns .google-auto-placed {
                display: none !important;
            }
        </style>

</head>
<!-- Body-->


<body>
    <main class="page-wrapper" style="margin-top: -70px">


        <!-- Page container--><!-- Breadcrumb-->
        <div class='container mt-5 mb-md-4 py-5'>
            <nav class='mb-3 pt-md-3' aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='/'>Home</a></li>


                    <li class='breadcrumb-item active' aria-current='page'>{{ $Vegetable->heading }}</li>
                </ol>
            </nav>
            <h1 class='h2 mb-4'>{{ $Vegetable->heading }}</h1>

            <div class='mb-4 pb-1'>
                <ul class='list-unstyled d-flex flex-wrap mb-0 text-nowrap'>
                    <li class='me-3'>{{ $Vegetable->updated_at }}</li>
                    <li class='me-3 border-end'></li>
                    <li class='me-3'><a class='nav-link-muted' href='#comments' data-scroll>0 comment</a></li>
                    <li class='me-3 border-end'></li>

                </ul>
            </div>
            <!-- Post content-->
            <div class='row'>
                <div class="col-12">
                    <div class="mb-5">
                    </div>
                </div>
                <div class='col-lg-2 col-md-1 mb-md-0 mb-4 mt-md-n5'>
                    <!-- Sharing-->

                </div>
                <div class='col-lg-8 col-md-10'>
                    <!-- Post content-->
                    <div class="text-dark">

                        <p>{{ $Vegetable->first_description }}</p>
                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->first_image) }}"
                                    alt="Vegetable Image" style="height:400px; width:600px">
                            </figure>
                        </div>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>






                        <h2 class="wp-block-heading"><strong>Table of Contents</strong></h2>



                        <ul>
                            <li><a href="#Understanding-Potatoes" data-type="internal"
                                    data-id="#Understanding-Potatoes">Understanding {{ $Vegetable->name }}</a></li>



                            <li><a href="#Preparing-for-Planting" data-type="internal"
                                    data-id="#Preparing-for-Planting">Preparing for Planting</a></li>



                            <li><a href="#Planting-Your-Potatoes" data-type="internal"
                                    data-id="#Planting-Your-Potatoes">Planting Your {{ $Vegetable->name }}</a></li>



                            <li><a href="#Growth-and-Maintenance" data-type="internal"
                                    data-id="#Growth-and-Maintenance">Growth and Maintenance</a></li>



                            <li><a href="#The-Hilling-Process-in-Potato-Cultivation" data-type="internal"
                                    data-id="#The-Hilling-Process-in-Potato-Cultivation">The Hilling Process in {{ $Vegetable->name }}
                                    Cultivation</a></li>



                            <li><a href="#Harvesting-and-Storing-Potatoes" data-type="internal"
                                    data-id="#Harvesting-and-Storing-Potatoes">Harvesting and Storing {{ $Vegetable->name }}</a></li>



                            <li><a href="#Final-Thoughts" data-type="internal" data-id="#Final-Thoughts">Final
                                    Thoughts</a></li>



                            <li><a href="#FAQs" data-type="internal" data-id="#FAQs">FAQs</a></li>
                        </ul>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center has-medium-font-size"
                            id="Understanding-Potatoes"><strong>Understanding {{ $Vegetable->name }}</strong></h3>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->variety_image) }}"
                                    alt="Vegetable Image" style="height:360px; width:500px">
                            </figure>
                        </div>


                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>







                        <h4 class="wp-block-heading"><strong>{{ $Vegetable->heading }}</strong>
                        </h4>







                        <ol>
                            @php
                                $vegetables = json_decode($Vegetable->variety_description, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['variety_name'] }}:</strong>
                                        {{ $vegetable['variety_description'] }}</li>
                                @endforeach
                            @else
                                <li><strong>{{ $Vegetable->variety_name }}:</strong>
                                    {{ $Vegetable->variety_description }}</li>
                            @endif

                        </ol>







                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center has-medium-font-size"
                            id="Preparing-for-Planting"><strong>Preparing for Planting</strong></h3>



                        <p><strong>Soil Preparation</strong></p>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->soil_image) }}" alt="Vegetable Image"
                                    style="height:360px; width:500px">
                            </figure>
                        </div>


                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>







                        <ul>

                            @php
                                $vegetables = json_decode($Vegetable->soil_preparation, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['soil_name'] }}:</strong>
                                        {{ $vegetable['soil_description'] }}</li>
                                @endforeach
                            @else
                                <li><strong>{{ $vegetable['soil_name'] }}:</strong>
                                    {{ $vegetable['soil_description'] }}</li>
                            @endif




                        </ul>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center has-medium-font-size"
                            id="Planting-Your-Potatoes"><strong>Planting Your {{ $Vegetable->name }}</strong></h3>






                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->planting_image) }}"
                                    alt="Vegetable Image" style="height:360px; width:500px">
                            </figure>
                        </div>


                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>













                        <h4 class="wp-block-heading"><strong>Planting Techniques:</strong></h4>



                        <ul>
                            @php
                                $vegetables = json_decode($Vegetable->planting_techniques, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['technique_name'] }}:</strong>
                                        {{ $vegetable['technique_description'] }}</li>
                                @endforeach
                            @else
                                <li><strong>{{ $vegetable['soil_name'] }}:</strong>
                                    {{ $vegetable['soil_description'] }}</li>
                            @endif
                        </ul>









                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center has-medium-font-size"
                            id="Growth-and-Maintenance"><strong>Growth and Maintenance</strong></h3>



                        <p>Successful cultivation of potato plants requires meticulous attention to their growing
                            conditions. Here’s a detailed breakdown of the key care practices:</p>



                        <h4 class="wp-block-heading"><strong>Watering Requirements</strong></h4>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->care_image) }}" alt="Vegetable Image"
                                    style="height:360px; width:600px">
                            </figure>
                        </div>


                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <p>{{ $Vegetable->watering_practices_dis }}</p>

                        <ul>
                            @php
                                $vegetables = json_decode($Vegetable->watering_practices, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['wateringpractices_name'] }}:</strong>
                                        {{ $vegetable['wateringpractices_description'] }}</li>
                                @endforeach
                            @else
                                <li><strong>{{ $vegetable['soil_name'] }}:</strong>
                                    {{ $vegetable['soil_description'] }}</li>
                            @endif
                        </ul>

                        <h4 class="wp-block-heading"><strong>Fertilization and Soil Care</strong></h4>



                        <p>{{ $Vegetable->fertilization_strategy_dis }}</p>
                        <ul>
                            @php
                                $vegetables = json_decode($Vegetable->fertilization_strategy, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['fertilizationstrategy_name'] }}:</strong>
                                        {{ $vegetable['fertilizationstrategy_description'] }}</li>
                                @endforeach
                            @else
                                <li><strong>{{ $vegetable['fertilizationstrategy_name'] }}:</strong>
                                    {{ $vegetable['fertilizationstrategy_description'] }}</li>

                            @endif
                        </ul>


                        <h4 class="wp-block-heading"><strong>Pest and Disease Management</strong></h4>




                        <p>{{ $Vegetable->managing_pests_and_diseases }}</p>




                        </figure>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>






                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center" id="Harvesting-and-Storing-Potatoes">
                            <strong>Harvesting and Storing Potatoes</strong>
                        </h3>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


                        <div class="wp-block-image">
                            <figure class="aligncenter size-full is-resized">
                                <img src="{{ asset('uploads/veg/' . $Vegetable->first_image) }}"
                                    alt="Vegetable Image" style="height:360px; width:600px">
                            </figure>
                        </div>


                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <p>{{ $Vegetable->harvesting_discription }}</p>

                        <figure class="wp-block-table is-style-stripes">
                            <table class="has-very-light-gray-to-cyan-bluish-gray-gradient-background has-background">
                                <thead>
                                    <tr>
                                        <th class="has-text-align-center" data-align="center"><strong>Aspect</strong>
                                        </th>
                                        <th class="has-text-align-center" data-align="center"><strong>Detail</strong>
                                        </th>
                                        <th class="has-text-align-center" data-align="center">
                                            <strong>Importance</strong>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $vegetables = json_decode($Vegetable->harvesting_table, true);
                                    @endphp

                                    @if (!empty($vegetables))
                                        @foreach ($vegetables as $vegetable)
                                            <tr>
                                                <td class="has-text-align-center" data-align="center">
                                                    {{ $vegetable['aspect'] }}:</td>
                                                <td class="has-text-align-center" data-align="center">
                                                    {{ $vegetable['detail'] }}:</td>
                                                <td class="has-text-align-center" data-align="center">
                                                    {{ $vegetable['importance'] }}:</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="has-text-align-center" data-align="center">
                                                {{ $vegetable['aspect'] }}:</td>
                                            <td class="has-text-align-center" data-align="center">
                                                {{ $vegetable['detail'] }}:</td>
                                            <td class="has-text-align-center" data-align="center">
                                                {{ $vegetable['importance'] }}:</td>
                                        </tr>
                                    @endif





                                </tbody>
                            </table>
                        </figure>



                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>









                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>





                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h2 class="wp-block-heading" id="FAQs"><strong>FAQs</strong></h2>



                        <ol>
                            @php
                                $vegetables = json_decode($Vegetable->faqs, true);
                            @endphp

                            @if (!empty($vegetables))
                                @foreach ($vegetables as $vegetable)
                                    <li><strong>{{ $vegetable['question'] }}:</strong>
                                        {{ $vegetable['answer'] }}</li>
                                @endforeach
                            @else
                                <li>No FAQs available</li>
                            @endif
                        </ol>







                    </div>
                </div>



    </main>
    <!-- Footer-->

    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
            class="btn-scroll-top-icon fi-chevron-up">
        </i></a>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript"
        src="https://forestry.com/wp/wp-content/themes/Forestry/js/bootstrap.bundle.min.js?ver=1.0.0" id="bootstrap-js">
    </script>
    <script type="text/javascript" id="ajax-comment-js-extra">
        /* <![CDATA[ */
        var ajaxcomment = {
            "ajax_url": "https:\/\/forestry.com\/wp\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://forestry.com/wp/wp-content/themes/Forestry/js/ajax-comment.js?ver=1.5"
        id="ajax-comment-js"></script>
    <script type="text/javascript" src="https://forestry.com/wp/wp-includes/js/comment-reply.min.js?ver=6.5.2"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids();
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;

            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;

                    mutations.forEach(function(mutation) {
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                return;
                            }

                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                return;
                            }

                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');

                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;

                            if (is_image) {
                                image_count += 1;
                            }

                            if (is_iframe) {
                                iframe_count += 1;
                            }
                        }
                    });

                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update();
                    }
                });

                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: true,
                    subtree: true
                };

                observer.observe(b, config);
            }
        }, false);
    </script>
    <script data-no-minify="1" async
        src="https://forestry.com/wp/wp-content/plugins/rocket-lazy-load/assets/js/16.1/lazyload.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LX4CQ2SZ9X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-LX4CQ2SZ9X');
    </script>
</body>
