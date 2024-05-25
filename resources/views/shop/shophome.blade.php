<x-site-layout>


    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg); margin-bottom:-60px">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                    <li>Shop</li>
                </ul>
                <h2>Shop</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="shop-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-one__sidebar">
                        <div class="shop-one__sidebar__item shop-one__sidebar__search">
                            <form action="{{ url('searchproduct') }}" method="get" class="search-field container">
                                @csrf
                                <input type="search" placeholder="Search here" id="Search_products" name="search">
                                <button type="submit"><i class=" icon-search "></i></button>
                            </form>

                        </div><!-- /.shop-one__sidebar__item -->
                        <!-- /.shop-one__sidebar__item -->
                        <div class="shop-one__sidebar__item shop-one__sidebar__category">
                            <h3 class="shop-one__sidebar__item__title">Categories</h3>
                            <!-- /.shop-one__sidebar__item__title -->
                            <ul class="list-unstyled shop-one__sidebar__category__list">
                                @foreach ($trandin ?? [] as $Category)
                                    @if (is_object($Category))
                                        <li><a
                                                href="{{ url('view-category/' . $Category->slug) }}">{{ $Category->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="shop-one__sidebar__item shop-one__sidebar__category">
                            <h3 class="shop-one__sidebar__item__title">Categories</h3>
                            <!-- /.shop-one__sidebar__item__title -->
                            <ul class="list-unstyled shop-one__sidebar__category__list">
                                @foreach ($product as $item)
                                    @if ($item->category)
                                        <li>
                                            <a href="{{ url('view-category/' . $item->category->slug) }}">
                                                {{ $item->category->name }}
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="#">
                                                Unknown Category
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div> --}}
                        {{-- <div class="shop-one__sidebar__item shop-one__sidebar__price">
                            <h3 class="shop-one__sidebar__item__title">Price</h3>
                            <!-- /.shop-one__sidebar__item__title -->



                            <div class="shop-one__sidebar__price-range">
                                <div class="range-slider-price" data-range-min="10" data-range-max="200"
                                    data-limit="200" data-start-min="30" data-start-max="150" id="range-slider-price">
                                </div>
                                <div class="form-group">
                                    <div class="left">
                                        <p>$<span id="min-value-rangeslider"></span></p>
                                        <span>-</span>
                                        <p>$<span id="max-value-rangeslider"></span></p>
                                    </div><!-- /.left -->
                                    <div class="right">
                                        <button class="thm-btn">
                                            Filter
                                        </button>
                                    </div><!-- /.right -->
                                </div>
                            </div>


                        </div><!-- /.shop-one__sidebar__item --> --}}
                    </div><!-- /.shop-one__sidebar -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-9">
                    <div class="row">


                        <form action="{{ url('sort') }}" method="get" class="search-field container">
                            @csrf
                            <div class="col-lg-12 shop-one__sorter">
                                <p class="shop-one__product-count">Showing 1–9 of 12 results</p>
                                <select class="shop-one__product-sorter" name="sort" id="sort"
                                    onchange="this.form.submit()">
                                    <option value="" disabled selected>Sort By</option>
                                    <option value="best_selling">Best Selling</option>
                                    <option value="lowest_price">Lowest Price</option>
                                    <option value="highest_price">Highest Price</option>
                                    <option value="highest_price">Highest Price</option>
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                </select>
                            </div>
                        </form>


                    </div><!-- /.row -->
                    <div class="row">
                        @foreach ($product as $Product)

                        @if ($Product->sale == 1)
                        <div class="col-md-6 col-lg-4">
                            <div class="shop-one__item">
                                <div class="shop-one__image">
                                    <span class="shop-one__sale">sale</span><!-- /.shop-one__sale -->

                                    <img src="{{ asset('uploads/product/' . $Product->image) }}" alt=""
                                        style="height: 280px; width: 270">
                                    <a class="shop-one__cart" href="{{ url('more/' . $Product->slug) }}"><i
                                            class=" fa fa-eye"></i></a>
                                </div><!-- /.shop-one__image -->
                                <div class="shop-one__content text-center">
                                    <h3 class="shop-one__title"><a
                                            href="{{ url('more/' . $Product->slug) }}">{{ $Product->name }}</a>
                                    </h3>

                                    <p class="shop-one__price">
                                        @if ($Product->original_price > 0)
                                            <span
                                                style="text-decoration: line-through;">Rs.{{ $Product->original_price }}
                                            </span>
                                            <span style="font-weight: bold; margin-left: 10px; font-size: 20px; color: red; ">Rs.
                                                {{ $Product->selling_price }}</span>
                                        @else
                                            <span style="font-weight: bold; margin-left: 10px; font-size: 20px; color: red; ">Rs.
                                                {{ $Product->selling_price }}</span>
                                        @endif
                                    </p>
                                    <!-- /.shop-one__price -->
                                    <div class="shop-one__rating">
                                        {{-- @for ($i = 1; $i <= $rating_value; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @for ($j = $rating_value; $j < 5; $j++)
                                            <i class='fas fa-star' style='color: black'></i>
                                        @endfor --}}

                                    </div><!-- /.shop-one__rating -->
                                </div><!-- /.shop-one__content -->
                            </div><!-- /.shop-one__item -->
                        </div>
                        @else
                        <div class="col-md-6 col-lg-4">
                            <div class="shop-one__item">
                                <div class="shop-one__image">

                                    <img src="{{ asset('uploads/product/' . $Product->image) }}" alt=""
                                        style="height: 290px">
                                    <a class="shop-one__cart" href="{{ url('more/' . $Product->slug) }}"><i
                                            class=" fa fa-eye"></i></a>
                                </div><!-- /.shop-one__image -->
                                <div class="shop-one__content text-center">
                                    <h3 class="shop-one__title"><a
                                            href="{{ url('more/' . $Product->slug) }}">{{ $Product->name }}</a>
                                    </h3>

                                    <p class="shop-one__price">
                                        @if ($Product->original_price > 0)
                                            <span
                                                style="text-decoration: line-through;">Rs.{{ $Product->original_price }}
                                            </span>
                                            <span style="font-weight: bold; margin-left: 10px; font-size: 20px; color: red; ">Rs.
                                                {{ $Product->selling_price }}</span>
                                        @else
                                            <span style="font-weight: bold; margin-left: 10px; font-size: 20px; color: red; ">Rs.
                                                {{ $Product->selling_price }}</span>
                                        @endif
                                    </p>
                                    <!-- /.shop-one__price -->
                                    <div class="shop-one__rating">
                                        {{-- @for ($i = 1; $i <= $rating_value; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @for ($j = $rating_value; $j < 5; $j++)
                                            <i class='fas fa-star' style='color: black'></i>
                                        @endfor --}}

                                    </div><!-- /.shop-one__rating -->
                                </div><!-- /.shop-one__content -->
                            </div><!-- /.shop-one__item -->
                        </div>
                        @endif





                           <!-- /.col-md-6 col-lg-3 -->
                        @endforeach
                        {{ $product->links() }}

                    </div>

                </div> <!-- /.row -->
                <!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop-one -->



</x-site-layout>
