<x-site-layout>


    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                </ul>
                <h2>Look At The Best Buyers Here.</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--Meet Farmers One Start-->
    <section class="meet-farmers-one meet-farmers-one--about">
        <div class="container">
            <div class="row">

                @foreach ($ads as $ad)
                    <!--Start Single Meet Farmers One-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="meet-farmers-one__single">
                            <div class="meet-farmers-one__single-img">
                                <a href="{{ url('viewadds/' . $ad->id) }}"> <img
                                        src="{{ asset('uploads/shopads/' . $ad->image) }}" alt=""></a>
                            </div>
                            <div class="meet-farmers-one__single-title text-center">
                                <p>Shop Name: {{ $ad->user_name }}</p>
                                <p>City: {{ $ad->user_name }}</p>
                                <h2><a href="{{ url('viewadds/' . $ad->id) }}">{{ $ad->user_name }}</a></h2>
                                <div class="social-link">
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
                    <!--End Single Meet Farmers One-->
                @endforeach




            </div>
        </div>
    </section>
    <!--Meet Farmers One End-->




</x-site-layout>
