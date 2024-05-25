<x-site-layout>
    <!-- Page Header Start -->
    <section class="page-header clearfix"
        style="background-image: url('{{ asset('uploads/ss/' . $Vegetable->image) }}')">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="/">Home</a></li>
                </ul>
                <h2>{{ $Vegetable->name }}</h2>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- Start Services Details -->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <!-- Start Services Details Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="services-details__sidebar">
                        <!-- Start Services Details Sidebar Single -->
                        <div class="services-details__sidebar-single">
                            <div class="services-details__sidebar-single-services wow fadeInUp animated"
                                data-wow-delay="0.1s" data-wow-duration="1200m">
                                <div class="title">
                                    <h3>All Vegetables</h3>
                                </div>
                                <ul>
                                    @foreach ($Vegetables ?? [] as $Category)
                                        @if (is_object($Category))
                                            <li><a href="{{ url('morevege/' . $Category->id) }}">{{ $Category->name }}<i
                                                        class="fa fa-angle-right"></i></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End Services Details Sidebar Single -->

                        <!-- Start Services Details Sidebar Single -->
                        <div class="services-details__sidebar-single">
                            <div class="services-details__sidebar-single-contact-box text-center wow fadeInUp animated"
                                data-wow-delay="0.3s" data-wow-duration="1200m"
                                style="background-image:url('{{ asset('uploads/ss/' . $Vegetable->image) }}');">
                                <div class="icon">
                                    <span class="icon-phone-call-2"></span>
                                </div>
                                <div class="title">
                                    <h2>Selling <br>agriculture<br> products</h2>
                                </div>
                                <p class="phone"><a href="{{ url('/vegesell') }}">Click Here</a></p>
                                </div>
                        </div>
                        <!-- End Services Details Sidebar Single -->

                        <!-- Start Services Details Sidebar Single -->
                        <div class="services-details__sidebar-single">
                            <div class="services-details__sidebar-single-btn text-center wow fadeInUp animated"
                                data-wow-delay="0.5s" data-wow-duration="1200m">
                                <a href="#" class="thm-btn"><span class="icon-pdf"></span> download pdf file</a>
                            </div>
                        </div>
                        <!-- End Services Details Sidebar Single -->
                    </div>
                </div>
                <!-- End Services Details Sidebar -->

                <!-- Start Services Details Content -->
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <div class="services-details__content-img">
                            <img src="{{ asset('uploads/ss/' . $Vegetable->image) }}" alt="Vegetable Image"
                                style="height:200px; width:300px">
                        </div>
                        <div class="services-details__content-icon">
                            <span class="icon-harvest"></span>
                        </div>
                        <h2 class="services-details__content-title">{{ $Vegetable->name }}</h2>
                        <p class="services-details__content-text1"><strong>{{ $Vegetable->heading }}</strong></p>
                        <p class="services-details__content-text1">{{ $Vegetable->heading_description }}</p>

                        <h3 class="services-details__content-text2" style="color: green"><strong>Released
                                Varieties</strong></h3>

                        <div class="faq-one__accordions faq-one__accordions--services-details" style="margin-top: 10px">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <!-- Start Faq One Single -->
                                @php
                                    $variety = json_decode($Vegetable->variety, true);
                                @endphp
                                @if (is_array($variety))
                                    @foreach ($variety as $key => $VegetableVariety)
                                        <div class="accrodion wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1000ms">
                                            <div class="accrodion-title">
                                                <h4>{{ $VegetableVariety['name'] }}</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>{{ $VegetableVariety['management'] }}</p>
                                                </div>
                                                <img src="{{ asset('uploads/aaa/' . $VegetableVariety['image_path']) }}"
                                                    alt="Variety Image" style="height:150px; width:300px">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-green-600">No vegetables found</p>
                                @endif
                                <!-- End Faq One Single -->
                            </div>
                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Climatic
                                        requirements/ Areas suitable for cultivation</strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->climaticrequirements }}</p><br>
                                    <p>{{ $Vegetable->areas }}</p>


                                </div>
                            </div>



                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Soil</strong>
                                </h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->soil }}</p>


                                </div>

                            </div>

                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Seed
                                        requirement
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Seed_requirement }}</p>


                                </div>
                            </div>
                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green">
                                    <strong>Fertilizer</strong></h3>

                                @php
                                    $Fertilizer = json_decode($Vegetable->Fertilizer, true);
                                @endphp

                                @if (is_array($Fertilizer) && count($Fertilizer) > 0)
                                    @foreach ($Fertilizer as $key => $VegetableVariety)
                                        <p class="services-details__content-text1"
                                            style="margin-top: 10px; margin-bottom:-2px">
                                            <strong>{{ $VegetableVariety['name'] }}</strong></p>
                                        <div class="blog-one__single-content">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Times for apply</th>
                                                        <th>Urea kg/ha</th>
                                                        <th>TSP kg/ha</th>
                                                        <th>MOP kg/ha</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $VegetableVariety['tim'] }}</td>
                                                        <td>{{ $VegetableVariety['urea'] }}</td>
                                                        <td>{{ $VegetableVariety['tsp'] }}</td>
                                                        <td>{{ $VegetableVariety['mop'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-green-600">No vegetables found</p>
                                @endif


                            </div>

                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Nursery
                                        Management
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Nursery_Management }}</p>


                                </div>
                            </div>
                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Land
                                        preparation
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Nursery_Management }}</p>


                                </div>
                            </div>
                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Planting
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Planting }}</p>


                                </div>
                            </div>
                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Spacing
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Spacing }}</p>


                                </div>
                            </div>

                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <!-- Start Faq One Single -->
                                <h3 class="services-details__content-text2" style="color: green; margin-bottom:20px">
                                    <strong>Pest Management
                                    </strong></h3>
                                @php
                                    $Pest_Management = json_decode($Vegetable->Pest_Management, true);
                                @endphp

                                @if (is_array($Pest_Management))
                                    @foreach ($Pest_Management as $key => $VegetableVariety)
                                        <div class="accrodion wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1000ms">
                                            <div class="accrodion-title">
                                                <h4>{{ $VegetableVariety['name'] }}</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>{{ $VegetableVariety['management'] }}</p>
                                                </div>
                                                <img src="{{ asset('uploads/aaa/' . $VegetableVariety['image_path']) }}"
                                                    alt="Variety Image" style="height:150px; width:300px">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-green-600">No vegetables found</p>
                                @endif

                                <!-- End Faq One Single -->
                            </div>

                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <!-- Start Faq One Single -->
                                <h3 class="services-details__content-text2"
                                    style="color: green; margin-top:20px; margin-bottom:20px"><strong>Disease
                                        Management
                                    </strong></h3>
                                @php
                                    $Disease_Management = json_decode($Vegetable->Disease_Management, true);
                                @endphp

                                @if (is_array($Disease_Management))
                                    @foreach ($Disease_Management as $key => $VegetableVariety)
                                        <div class="accrodion wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1000ms">
                                            <div class="accrodion-title">
                                                <h4>{{ $VegetableVariety['name'] }}</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>{{ $VegetableVariety['management'] }}</p>
                                                </div>
                                                <img src="{{ asset('uploads/aaa/' . $VegetableVariety['image_path']) }}"
                                                    alt="Variety Image" style="height:150px; width:300px">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-green-600">No vegetables found</p>
                                @endif

                                <!-- End Faq One Single -->
                            </div>

                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Harvesting
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Harvesting }}</p>


                                </div>
                            </div>


                            <div class="blog-one__single" style="margin-top: 20px">
                                <h3 class="services-details__content-text2" style="color: green"><strong>Yield
                                    </strong></h3>

                                <div class="blog-one__single-content" style="margin-top: 20px">
                                    <p>{{ $Vegetable->Yield }}</p>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Services Details Content -->
            </div>
        </div>
    </section>
    <!-- End Services Details -->

    <script>
        $(document).ready(function() {
            $('.accrodion').click(function() {
                // Toggle the active class and show/hide the content
                $(this).toggleClass('active').find('.accrodion-content').slideToggle();
                // Hide other active items
                $('.accrodion').not(this).removeClass('active').find('.accrodion-content').slideUp();
            });
        });
    </script>

    <style>
        .accrodion-content {
            display: none;
        }

        .active .accrodion-content {
            display: block;
        }
    </style>
</x-site-layout>
