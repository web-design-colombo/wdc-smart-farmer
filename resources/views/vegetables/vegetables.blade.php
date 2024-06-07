<x-site-layout>
    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg); margin-bottom:-60px">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                    <li>Vegetables</li>
                </ul>
                <h2>Vegetables</h2>
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
                            <form action="{{ url('searchvege') }}" method="get" class="search-field container">
                                @csrf
                                <input type="search" placeholder="Search here" id="Search_veges" name="search">
                                <button type="submit"><i class=" icon-search "></i></button>
                            </form>

                        </div><!-- /.shop-one__sidebar__item -->
                        <!-- /.shop-one__sidebar__item -->
                        <div class="shop-one__sidebar__item shop-one__sidebar__category">
                            <h3 class="shop-one__sidebar__item__title">All Vegetables</h3>
                            <!-- /.shop-one__sidebar__item__title -->
                            <ul class="list-unstyled shop-one__sidebar__category__list">
                                @foreach ($Vegetables ?? [] as $Category)
                                    @if (is_object($Category))
                                        <li><a
                                                href="{{ url('morevege/' . $Category->id) }}">{{ $Category->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="shop-one__sidebar__item shop-one__sidebar__category">
                                <h3 class="shop-one__sidebar__item__title">Categories</h3>
                                <!-- /.shop-one__sidebar__item__title -->
                                <ul class="list-unstyled shop-one__sidebar__category__list">
                                    @foreach ($vege as $item)
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

                        </form>


                    </div><!-- /.row -->
                    <div class="row">
                        @foreach ($Vegetables as $vege)
                            <div class="col-md-6 col-lg-4">
                                <div class="shop-one__item">
                                    <div class="shop-one__image">
                                        <img src="{{ asset('uploads/ss/' . $vege->image) }}" alt=""
                                            >
                                        <a class="shop-one__cart" href="{{ url('morevege/' . $vege->id) }}"><i
                                                class=" fa fa-eye"></i></a>
                                    </div><!-- /.shop-one__image -->
                                    <div class="shop-one__content text-center">
                                        <h3 class="shop-one__title"><a
                                                href="{{ url('morevege/' . $vege->id) }}">{{ $vege->name }}</a>
                                        </h3>
                                        <p class="shop-one__price">{{ $vege->heading }}</p>
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
                            </div><!-- /.col-md-6 col-lg-3 -->
                        @endforeach

                    </div>

                </div> <!-- /.row -->
                <!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop-one -->



</x-site-layout>
