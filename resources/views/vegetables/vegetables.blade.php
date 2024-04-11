<x-site-layout>

    <form class="flex items-center max-w-sm mx-auto">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

            </div>
            <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Vegetable name..." required />
        </div>
        <button type="submit"
            class="p-2.5 ms-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>

    <main>

        <div class="mb-4 pb-lg-3"></div>

        <section class="shop-main container">

            <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" id="products-grid">

                @foreach ($Vegetables as $Vegetable)
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="{{ asset('uploads/vegetables/' . $Vegetable->imagehome) }}" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                    <div class="swiper-slide">
                                        <a href="product1_simple.html"><img loading="lazy"
                                                src="{{ asset('uploads/vegetables/' . $Vegetable->imagehome) }}" width="258" height="313"
                                                alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                    </div><!-- /.pc__img-wrapper -->
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>
                            <button
                                class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                data-aside="cartDrawer" title="Add To Cart">View More Details</button>
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="product1_simple.html">{{$Vegetable->name}}</a></h6>



                            <button
                                class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- /.products-grid row -->


        </section>
    </main>




</x-site-layout>
