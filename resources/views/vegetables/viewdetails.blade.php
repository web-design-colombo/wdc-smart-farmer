<x-site-layout>



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

</x-site-layout>
