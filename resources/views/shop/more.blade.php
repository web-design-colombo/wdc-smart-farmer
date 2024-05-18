<x-site-layout>



    <!--Page Header Start-->
        <section class="page-header clearfix"
            style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <ul class="thm-breadcrumb">
                        <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                        <li><a href="https://pixydrops.com/agriox/shop.html">Shop</a></li>
                        <li>Product Details</li>
                    </ul>
                    <h2>{{ $product->name }}</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details__image">
                            <img src="{{ asset('uploads/product/' . $product->image) }}" alt="">
                        </div><!-- /.product-details__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <div class="product-details__content__top">
                                <h3 class="product-details__content__name">{{ $product->name }}</h3>
                                <!-- /.product-details__content__name -->
                                <div class="product-details__content__price">Rs. {{ $product->selling_price }}</div>
                                <!-- /.product-details__content__price -->
                            </div><!-- /.product-details__content__top -->
                            <div class="product-details__content__rating">
                                <div class="product-details__content__rating__star">
                                    @for ($i = 1; $i <= $rating_value; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for ($j = $rating_value; $j < 5; $j++)
                                        <i class='fas fa-star' style='color: black'></i>
                                    @endfor


                                </div><!-- /.product-details__content__rating__star -->
                                <div class="product-details__content__rating__count">{{ $rating->count() }} reviews &
                                    {{ number_format($rating_value) }} Rating</div>
                                <!-- /.product-details__content__rating__count -->
                            </div><!-- /.product-details__content__rating -->
                            <div class="product-details__content__text">
                                <p>{{ $product->small_description }}</p>
                            </div><!-- /.product-details__content__text -->


                            <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                @csrf
                                <div class="product-details__content__quantity">
                                    <div class="product-details__content__quantity__text">Choose Quantity</div>
                                    <!-- /.product-details__content__quantity__text -->
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="quantity" value="1" name="quantity" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div><!-- /.product-details__content__quantity -->


                                <button type="submit" class="thm-btn cart-btn" data-aside="cartDrawer">Add to
                                    Cart</button>
                                <a class="thm-btn wishlist-btn" style="background-color: rgb(129, 205, 129)">add to
                                    wishlist</a>

                                {{-- <div class="product-details__content__buttons">
                                <a  class="thm-btn cart-btn">Add to
                                cart</a> /.thm-btn -->
                                <a href="#" class="thm-btn wishlist-btn">add to wishlist</a>
                                /.thm-btn wishlist-btn
                                 </div> --}}

                            </form>
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


                            <!-- /.product-details__content__buttons -->
                            <div class="product-details__content__social">
                                <div class="product-details__content__social__text">Share with friends</div>
                                <!-- /.product-details__content__social__text -->
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-pinterest-p"></a>
                            </div><!-- /.product-details__content__social -->
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.product-details -->

        <section class="product-content">
            <div class="container">
                <h2 class="product-content__title">Description</h2><!-- /.product-content__title -->
                {{ $product->description }}</p>
            </div><!-- /.container -->
        </section><!-- /.product-content -->

        <section class="product-review">
            <div class="container">
                <h2 class="product-content__title">{{ $rating->count() }} Reviews</h2><!-- /.product-content__title -->


                @foreach ($rating as $Rating)
                    <div class="product-review__item">


                        {{-- <div class="product-review__item__image">
                        <img src="https://pixydrops.com/agriox/assets/images/update-14-09-2021/shop/shop-review-1-1.png"
                            alt="">
                    </div><!-- /.product-review__item__image --> --}}
                        <div class="product-review__item__content">
                            <div class="product-review__item__star">
                                @if ($user_rating)
                                    @for ($i = 1; $i <= $user_rating->stars_rated; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for ($j = $rating_value; $j < 5; $j++)
                                        <i class='fas fa-star' style='color: black'></i>
                                    @endfor
                                @endif
                            </div><!-- /.product-review__item__star -->
                            <h3 class="product-review__item__title">{{ $Rating->name }}</h3>
                            <div class="product-review__item__meta">
                                {{ $Rating->created_at }}
                            </div><!-- /.product-review__item__meta -->
                            <p class="product-review__item__text"> {{ $Rating->review }}</p>
                            <!-- /.product-review__item__text -->
                        </div><!-- /.product-review__item__content -->
                    </div><!-- /.product-review__item -->
                @endforeach

            </div><!-- /.container -->
        </section><!-- /.product-review -->

        <section class="product-form">
            <form name="customer-review-form" action="{{ url('/add-rating') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="container">
                    <h2 class="product-content__title">Add a Review</h2><!-- /.product-content__title -->

                    <label>Your rating *</label>
                    <div class="star-rating">
                        <div class="stars">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" class="star"><i class="fa fa-star"></i></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" class="star"><i class="fa fa-star"></i></label>
                            <input type="radio" id="star3" name="rating" value="3" checked>
                            <label for="star3" class="star"><i class="fa fa-star"></i></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" class="star"><i class="fa fa-star"></i></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" class="star"><i class="fa fa-star"></i></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="comment-form__input-box">
                                <textarea id="form-input-review" name="review" class="form-control form-control_gray" placeholder="Your Review" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="comment-form__input-box">
                                <label for="form-input-name" class="form-label">Name *</label>
                                <input id="form-input-name" name="name" class="form-control form-control-md form-control_gray">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12" style="margin-top: 10px">
                            <button type="submit" class="thm-btn comment-form__btn">Submit comment</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /.container -->
        </section><!-- /.product-form -->


</x-site-layout>
