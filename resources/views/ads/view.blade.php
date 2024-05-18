<x-site-layout>

    <section class="team-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="team-details__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('uploads/shopads/' . $ads->image) }}" alt="" style="width: 412px; height:412px" >

                    </div><!-- /.team-details__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="team-details__content">
                        <h3 class="team-details__name">{{ $ads->user_name }}
                        </h3><!-- /.team-details__name -->
                        <p class="team-details__designation">{{ $ads->city }}</p><!-- /.team-details__designation -->
                        <ul class="team-details__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul><!-- /.team-details__social -->
                        <p class="team-details__highlight">Shop Name : {{ $ads->shop_name }}</p>
                        <!-- /.team-details__highlight -->
                        <div class="team-details__text">
                            <p>{{ $ads->shop_address }}</p>
                            <p>
                                {{ $ads->description }}</p>
                        </div><!-- /.team-details__text -->
                    </div><!-- /.team-details__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-details -->

    <section class="cart-table">
        <div class="container">
            <table>
                <thead>
                    <tr style="text-align: left">

                        <th scope="col">Vegetable Name</th>
                        <th scope="col" style="text-align: left">Price (per Kg)</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $vegetables = json_decode($ads->vegetables, true);
                    @endphp
                    @if (is_array($vegetables) && count($vegetables) > 0)
                        @foreach ($vegetables as $vegetable)
                            <tr >
                                <td>{{ $vegetable['vegetable_name'] }}</td>

                                <td >Rs. {{ $vegetable['vegetable_price'] }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2" class="text-green-600">No vegetables found</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div><!-- /.container -->
    </section><!-- /.cart-table -->



<br>



    <section class="contact-page__contact-info clearfix">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__contact-info-wrapper">
                        <div class="contact-page__contact-info-title">
                            <h2>Call Now</h2>
                        </div>

                        <div class="contact-page__contact-info-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-map"></span>
                                    </div>
                                    <div class="title">
                                        <span>Visit Our Store</span>
                                        <p>{{ $ads->shop_address }}</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-email-1"></span>
                                    </div>
                                    <div class="title">
                                        <span>Send Email</span>
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon phone">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="title">
                                        <span>Call Anytime</span>
                                        <p><a href="tel:123456789">{{ $ads->phone_number }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-site-layout>
