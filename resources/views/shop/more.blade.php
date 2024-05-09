<x-shop-layout>




    <main>

        <div class="mb-md-1 pb-md-3"></div>
        <section class="product-single container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-single__media" data-media-type="vertical-thumbnail">
                        <div class="product-single__image">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide product-single__image-item">
                                        <img loading="lazy" class="h-auto"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="674"
                                            height="674" alt="">
                                        <a data-fancybox="gallery"
                                            href="{{ asset('uploads/product/' . $product->image) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">

                                        </a>
                                    </div>
                                    <div class="swiper-slide product-single__image-item">
                                        <img loading="lazy" class="h-auto"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="674"
                                            height="674" alt="">
                                        <a data-fancybox="gallery"
                                            href="{{ asset('uploads/product/' . $product->image) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">

                                        </a>
                                    </div>
                                    <div class="swiper-slide product-single__image-item">
                                        <img loading="lazy" class="h-auto"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="674"
                                            height="674" alt="">
                                        <a data-fancybox="gallery"
                                            href="{{ asset('uploads/product/' . $product->image) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_zoom" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="swiper-slide product-single__image-item">
                                        <img loading="lazy" class="h-auto"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="674"
                                            height="674" alt="">
                                        <a data-fancybox="gallery"
                                            href="{{ asset('uploads/product/' . $product->image) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">

                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></div>
                                <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="product-single__thumbnail">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                            class="h-auto" src="{{ asset('uploads/product/' . $product->image) }}"
                                            width="104" height="104" alt=""></div>
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                            class="h-auto" src="{{ asset('uploads/product/' . $product->image) }}"
                                            width="104" height="104" alt=""></div>
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                            class="h-auto" src="{{ asset('uploads/product/' . $product->image) }}"
                                            width="104" height="104" alt=""></div>
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy"
                                            class="h-auto" src="{{ asset('uploads/product/' . $product->image) }}"
                                            width="104" height="104" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between mb-4 pb-md-2">
                        <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                            <a href="{{ url('/shop') }}"
                                class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                            <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                            <a href="#"
                                class="menu-link menu-link_us-s text-uppercase fw-medium">{{ $product->name }}</a>
                        </div><!-- /.breadcrumb -->

                        <div
                            class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                            <a href="product1_simple.html" class="text-uppercase fw-medium"><svg class="mb-1px"
                                    width="10" height="10" viewBox="0 0 25 25"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_md" />
                                </svg><span class="menu-link menu-link_us-s">Prev</span></a>
                            <a href="product3_external.html" class="text-uppercase fw-medium"><span
                                    class="menu-link menu-link_us-s">Next</span><svg class="mb-1px" width="10"
                                    height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_md" />
                                </svg></a>
                        </div><!-- /.shop-acs -->
                    </div>
                    <h1 class="product-single__name">{{ $product->name }}</h1>
                    <div class="product-single__rating">
                        <div class="reviews-group d-flex">
                            @for ($i = 1; $i <= $rating_value; $i++)
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                            @endfor

                            @for ($j = $rating_value; $j < 5; $j++)
                                <svg class="review-starblank" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                            @endfor

                        </div>
                        <span class="reviews-note text-lowercase text-secondary ms-1">{{ $rating->count() }} reviews &
                            {{ number_format($rating_value) }} Rating</span>
                    </div>
                    <div class="product-single__price">
                        <span class="current-price">Rs. {{ $product->selling_price }}</span>
                    </div>
                    <div class="product-single__short-desc">
                        <p>{{ $product->description }}</p>
                    </div>

                    <div class="product-single__addtolinks">
                        <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16"
                                height="16" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_heart" />
                            </svg><span>Add to Wishlist</span></a>
                        <share-button class="share-button">
                            <button
                                class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_sharing" />
                                </svg>
                                <span>Share</span>
                            </button>
                            <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                                <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                                <div id="Article-share-template__main"
                                    class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                    <div class="field grow mr-4">
                                        <label class="field__label sr-only" for="url">Link</label>
                                        <input type="text" class="field__input w-full" id="url"
                                            value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                            placeholder="Link" onclick="this.select();" readonly="">
                                    </div>
                                    <button class="share-button__copy no-js-hidden">
                                        <svg class="icon icon-clipboard inline-block mr-1" width="11"
                                            height="13" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <span class="sr-only">Copy link</span>
                                    </button>
                                </div>
                            </details>
                        </share-button>
                        <script src="js/details-disclosure.js" defer="defer"></script>
                        <script src="js/share.js" defer="defer"></script>
                    </div>
                    <div class="product-single__meta-info">

                        <div class="meta-item">
                            <label>Categories:</label>
                            <span></span>
                        </div>

                    </div>
                    <form action="{{ route('addToCart', $product->id) }}" method="POST">
                        @csrf
                        <div class="product-single__swatches">
                            <!-- Swatches code here if needed -->
                        </div>
                        <div class="product-single__addtocart">
                            <div class="qty-control position-relative">
                                <input id="quantity" type="number" name="quantity" value="1" min="1"
                                    class="qty-control__number text-center">
                                <div class="qty-control__reduce" onclick="decreaseQuantity()">-</div>
                                <div class="qty-control__increase" onclick="increaseQuantity()">+</div>
                            </div><!-- .qty-control -->
                            <button type="submit" class="btn btn-primary btn-addtocart js-open-aside"
                                data-aside="cartDrawer">Add to Cart</button>
                        </div>
                    </form>

                    <script>
                        function decreaseQuantity() {
                            let quantityInput = document.getElementById('quantity');
                            let currentValue = parseInt(quantityInput.value);
                            if (currentValue > 1) {
                                quantityInput.value = currentValue - 1;
                            }
                        }

                        function increaseQuantity() {
                            let quantityInput = document.getElementById('quantity');
                            let currentValue = parseInt(quantityInput.value);
                            quantityInput.value = currentValue + 1;
                        }
                    </script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    @if (session('success'))
                        <script>
                            swal("Thank You !", "{{ session('success') }}", "success");
                        </script>
                    @endif

                    @if (session('fail'))
                        <script>
                            swal("Product is already in the cart");
                        </script>
                    @endif

                    @if (session('error'))
                        <script>
                            swal("You must be logged in to add products to cart");
                        </script>
                    @endif

                    <!-- partial -->
                    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>

                </div>

            </div>


            <div class="product-single__details-tab">
                <ul class="nav nav-tabs" id="myTab1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
                            href="#tab-description" role="tab" aria-controls="tab-description"
                            aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab"
                            href="#tab-additional-info" role="tab" aria-controls="tab-additional-info"
                            aria-selected="false">Additional Information</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab"
                            href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                            aria-selected="false">Reviews (2)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                        aria-labelledby="tab-description-tab">
                        <div class="product-single__description">
                            <h3 class="block-title mb-4">Sed do eiusmod tempor incididunt ut labore</h3>
                            <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="block-title">Why choose product?</h3>
                                    <ul class="list text-list">
                                        <li>Creat by cotton fibric with soft and smooth</li>
                                        <li>Simple, Configurable (e.g. size, color, etc.), bundled</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="block-title">Sample Number List</h3>
                                    <ol class="list text-list">
                                        <li>Create Store-specific attrittbutes on the fly</li>
                                        <li>Simple, Configurable (e.g. size, color, etc.), bundled</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                    </ol>
                                </div>
                            </div>
                            <h3 class="block-title mb-0">Lining</h3>
                            <p class="content">100% Polyester, Main: 100% Polyester.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-additional-info" role="tabpanel"
                        aria-labelledby="tab-additional-info-tab">
                        <div class="product-single__addtional-info">
                            <div class="item">
                                <label class="h6">Weight</label>
                                <span>1.25 kg</span>
                            </div>
                            <div class="item">
                                <label class="h6">Dimensions</label>
                                <span>90 x 60 x 90 cm</span>
                            </div>
                            <div class="item">
                                <label class="h6">Size</label>
                                <span>XS, S, M, L, XL</span>
                            </div>
                            <div class="item">
                                <label class="h6">Color</label>
                                <span>Black, Orange, White</span>
                            </div>
                            <div class="item">
                                <label class="h6">Storage</label>
                                <span>Relaxed fit shirt-style dress with a rugged</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
                        <h2 class="product-single__reviews-title">Reviews</h2>
                        <div class="product-single__reviews-list">
                            <div class="product-single__reviews-item">
                                @foreach ($rating as $Rating)
                                    <div class="customer-review">
                                        <div class="customer-name">
                                            <h6>{{ $Rating->name }}</h6>


                                            <div class="reviews-group d-flex">
                                                @if ($user_rating)
                                                @for ($i = 1; $i <= $user_rating->stars_rated; $i++)
                                                <input type="radio" name="rating" value="{{ $i }}" checked id="rating{{$i}}">
                                                <label for="rating{{$i}}" ><svg class="review-star" viewBox="0 0 9 9"
                                                    xmlns="http://www.w3.org/2000/svg" style="fill: yellow;">
                                                    <use href="#icon_star" />
                                                </svg></label>
                                            @endfor

                                                    @for ($j = $rating_value; $j < 5; $j++)
                                                        <svg class="review-starblank" viewBox="0 0 9 9"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use href="#icon_star" />
                                                        </svg>
                                                    @endfor
                                                @endif

                                            </div>
                                        </div>
                                        <div class="review-date">{{ $Rating->created_at }}</div>
                                        <div class="review-text">
                                            <p>{{ $Rating->review }}</p>
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                            <form name="customer-review-form" action="{{ url('/add-rating') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="product-single__review-form">
                                    <h5>Be the first to review “{{ $product->name }}”</h5>
                                    <label>Your rating *</label>
                                    <div class="star-rating">
                                        <div class="stars">
                                            <label class="number"><input type="radio" name="rating"
                                                    value="0"></label>
                                            <label class="star"><input type="radio" name="rating"
                                                    value="1"></label>
                                            <label class="star"><input type="radio" name="rating"
                                                    value="2"></label>
                                            <label class="star"><input type="radio" name="rating"
                                                    value="3" checked></label>
                                            <label class="star"><input type="radio" name="rating"
                                                    value="4"></label>
                                            <label class="star"><input type="radio" name="rating"
                                                    value="5"></label>
                                        </div>
                                    </div>
                                    <input type="hidden" id="form-input-rating" value="">
                                </div>
                                <div class="mb-4">
                                    <textarea id="form-input-review" name="review" class="form-control form-control_gray" placeholder="Your Review"
                                        cols="30" rows="8"></textarea>
                                </div>
                                <div class="form-label-fixed mb-4">
                                    <label for="form-input-name" class="form-label">Name *</label>
                                    <input id="form-input-name" name="name"
                                        class="form-control form-control-md form-control_gray">
                                </div>
                                <div class="form-action">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>

</x-shop-layout>
