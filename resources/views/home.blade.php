<x-site-layout>

    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>A Simply & <span>Powerful</span> Way To Get <span>Good Harvest</span></h1>
                                <p>Choose the right seeds, grow with advanced methods and new Techniques, and harvest
                                    successfully.
                                    Your complete guide to modern agriculture.</p>
                                <div class="button">
                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/redirects') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                <a href="{{ route('register') }}" class="btn">Go to Dashbord</a>

                                            </a>
                                        @else
                                            <a href="{{ route('register') }}" class="btn">START YOUR FREE TRIAL</a>


                                        @endauth
                                    @endif


                                    <a href="#" class="btn primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>A Simply & <span>Powerful</span> Way To Get <span>Good Harvest</span></h1>
                                <p>Choose the right seeds, grow with advanced methods and new Techniques, and harvest
                                    successfully.
                                    Your complete guide to modern agriculture.</p>
                                <div class="button">
                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/redirects') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                <a href="{{ route('register') }}" class="btn">Go to Dashbord</a>

                                            </a>
                                        @else
                                            <a href="{{ route('register') }}" class="btn">START YOUR FREE TRIAL</a>


                                        @endauth
                                    @endif
                                    <a href="#" class="btn primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('img/s3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>A Simply & <span>Powerful</span> Way To Get <span>Good Harvest</span></h1>
                                <p>Choose the right seeds, grow with advanced methods and new Techniques, and harvest
                                    successfully.
                                    Your complete guide to modern agriculture.</p>
                                <div class="button">

                                    @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/redirects') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                <a href="{{ route('register') }}" class="btn">Go to Dashbord</a>

                                            </a>
                                        @else
                                            <a href="{{ route('register') }}" class="btn">START YOUR FREE TRIAL</a>


                                        @endauth
                                    @endif
                                    <a href="#" class="btn primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <!-- single-schedule -->
                        <div class="single-schedule first">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa-solid fa-tractor"></i>
                                </div>
                                <div class="single-content">
                                    <!-- <span>Lorem Amet</span> -->
                                    <h4>Start Your Journey to Successful Farming</h4>
                                    <p>Embark on a guided farming journey, from seed to harvest, ensuring success at
                                        every step.</p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-building-wheat"></i>
                                </div>
                                <div class="single-content">
                                    <!-- <span>Fusce Porttitor</span> -->
                                    <h4>Explore Modern Farming Techniques</h4>
                                    <p>Discover and implement the latest farming techniques with our concise guides and
                                        tutorials.</p>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa-solid fa-carrot"></i>
                                </div>
                                <div class="single-content">
                                    <!-- <span>Donec luctus</span> -->
                                    <h4>Connect with a Supportive Farming Community</h4>
                                    <p>Join our supportive network to share experiences, seek advice, and thrive
                                        together in the world of agriculture.</p>>
                                    <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You </h2>
                        <!-- <img src="img/section-img.png" alt="#"> -->
                        <p>Count on us for unwavering support 24/7 – we're always ready to assist you on your journey,
                            ensuring your success in every farming endeavor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Our team is available 24/7, ready to assist you at any time, ensuring you receive the help
                            you need whenever you need it.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="fa-solid fa-tractor"></i>
                        </div>
                        <h3>Tailored Solutions</h3>
                        <p>Experience personalized solutions crafted to suit your specific farming requirements,
                            guaranteeing a unique and effective approach to your challenges.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="fa-solid fa-building-wheat"></i>
                        </div>
                        <h3>Proactive Problem Solving</h3>
                        <p>Stay ahead with our proactive approach to problem-solving, addressing issues before they
                            arise and keeping your farming journey seamless and successful.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Farming Items</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">20</span>
                            <p>agriculture advisors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Farmers</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">6</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        <p> At Smart Farmer, we're champions of modern agriculture, dedicated to merging traditional
                            farming wisdom with cutting-edge technology. Our mission is to empower farmers with
                            knowledge and tools for a successful and sustainable crop production journey.</p>
                        <p>At Smart Farmer is your gateway to innovative farming practices, promoting inclusivity and
                            community collaboration. Our user-friendly platform seamlessly connects farmers with
                            technology, making aspects like seed selection and issue resolution easily accessible. Each
                            farmer gets a personalized account, fostering a sense of community and delivering tailored
                            solutions for a thriving agricultural experience. </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Advocates for Modernization </li>
                                    <li><i class="fa fa-caret-right"></i>Sustainability Focus</li>
                                    <li><i class="fa fa-caret-right"></i>Empowering Farmers</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Innovative Farming Hub </li>
                                    <li><i class="fa fa-caret-right"></i>User-Friendly Technology</li>
                                    <li><i class="fa fa-caret-right"></i>Community-Centric</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                                class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Curious or Confused? - Do You Need Help? Call @ +9477 684 003 2</h2>
                        <p>Do you need? Your one-stop query solution. We're here to assist and provide answers tailored
                            to your requirements.</p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    <section class="portfolio section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <div class="single-pf">
                            <img src="img/pf1.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf2.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf3.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf4.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf1.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf2.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf3.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="img/pf4.jpg" alt="#">
                            <a href="portfolio-details.html" class="btn" style="padding-left: 34px">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Start service -->
    <section class="services section" style="margin-top: -10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Cultivation</h2>
                        <p>Elevate your cultivation with our diverse services—precision planting, innovative crop
                            management, and tailored solutions. Harvest success with us!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-square-check"></i>
                        <h4><a href="service-details.html">Seed Selection and Sourcing</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-regular fa-hand-pointer"></i>
                        <h4><a href="service-details.html">Crop Selection and Planning</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-mobile"></i>
                        <h4><a href="service-details.html">Smart Farming Technology Integration</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-wheat-awn-circle-exclamation"></i>
                        <h4><a href="service-details.html">
                                Cultivation Practices</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-leaf"></i>
                        <h4><a href="service-details.html">Harvesting Techniques</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-people-roof"></i>
                        <h4><a href="service-details.html">
                                Community Collaboration</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <h4><a href="service-details.html">
                                Shop</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-smog"></i>
                        <h4><a href="service-details.html">Weather and Climate Updates</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <h4><a href="service-details.html">

                                Problem-Solving Assistance</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                            imperdiet. </p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End service -->

    <div class="feat bg-gray pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Why Choose</span> Us?</h4>
                    <p>Our platform provides access to the latest and most advanced farming technologies. Stay ahead of the curve with modern equipment, precision farming tools, and innovative solutions to maximize your crop yields and efficiency.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Cutting-Edge Technology</h6>
                        <p>Benefit from the wisdom of experienced farmers and agricultural experts who are part of our supportive community.</p></div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>Expert Guidance</h6>
                        <p>We are always creative and and always lisen our costomers and we mix these two things and
                            make beast design.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i
                                class="fa fa-hourglass-half"></i></span>
                        <h6>Community Support</h6>
                        <p>Join a vibrant and engaged farming community where you can connect with like-minded individuals. Share your experiences, learn from others, .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_four"><i
                                class="fa fa-database"></i></span>
                        <h6>Resourceful Learning Hub</h6>
                        <p>Access a comprehensive learning hub filled with articles, videos, and tutorials covering a wide range of farming topics. Stay informed about the latest trends, best practices, and sustainable farming methods to continuously improve your skills and knowledge</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
                        <h6>Marketplace Integration</h6>
                        <p>Connect with buyers, suppliers, and other farmers through our integrated marketplace. Streamline your operations by easily sourcing quality inputs, selling your produce, and exploring collaboration opportunities within our interconnected ecosystem.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6>Tailored Solutions for Your Farm</h6>
                        <p>We understand that every farm is unique. Our platform offers personalized solutions based on your specific needs and challenges. Whether you're a small-scale organic farmer or a large-scale commercial operation, </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Start Blog Area -->
     <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Agricultural News.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/IMG-1517.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">December 15, 2023 By Uditha Jayasinghe.</div>
                                <h2><a href="blog-single.html">Sri Lanka's economy returns to growth, led by
                                        agriculture</a></h2>
                                <p class="text">
                                    https://www.reuters.com/markets/asia/sri-lankas-economy-returns-growth-led-by-agriculture-2023-12-15/
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/IMG-1528.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">18 May 2022 By Zaheena Rasheed and Rathindra Kuruwita </div>
                                <h2><a href="blog-single.html">Sri Lanka faces ‘man-made’ food crisis as farmers stop
                                        planting</a></h2>
                                <p class="text">
                                    https://www.aljazeera.com/news/2022/5/18/a-food-crisis-looms-in-sri-lanka-as-farmers-give-up-on-planting
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/04srilanka-food-01-jumbo (1).jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">Dec. 7, 2021 By Aanya Wipulasena and Mujib Mashal</div>
                                <h2><a href="blog-single.html">Sri Lanka’s Plunge Into Organic Farming Brings
                                        Disaster</a></h2>
                                <p class="text">
                                    https://www.nytimes.com/2021/12/07/world/asia/sri-lanka-organic-farming-fertilizer.html?smid=url-share
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

     <!-- Start Newsletter Area -->
     <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Stay informed and inspired! Sign up for our newsletter to receive the latest
                            updates, exclusive offers, and valuable insights directly to your inbox</p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->


</x-app-layout>
