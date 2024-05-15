<x-site-layout>



    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                    <li><a href="https://pixydrops.com/agriox/shop.html">Shop</a></li>
                    <li>Cart</li>
                </ul>
                <h2>Cart</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <section class="cart-table">
        <div class="container">
            <table>
                <thead>
                    <tr style="text-align: left">
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>

                    @php $total = 0; @endphp
                    @foreach ($cart as $item)
                        @if ($item->user_id == auth()->id())
                            <form action="{{ url('cartupdate', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <tr>
                                    <td data-label="Item">
                                        <div class="cart-table__item">
                                            <img src="{{ asset('uploads/product/' . $item->prod_image) }}"
                                                alt="" style="width: 94px">
                                            <h3 class="cart-table__item__title">Brown Bread</h3>
                                            <!-- /.cart-table__item__title -->
                                        </div><!-- /.cart-table__item -->
                                    </td>
                                    <td data-label="Price">{{ $item->prod_price }}</td>
                                    <td data-label="Quantity">
                                        <div class="quantity-box">
                                            <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                            <input name="quantity" type="number" id="product-2"
                                                value="{{ $item->prod_qty }}" />
                                            <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td data-label="Total">{{ number_format($item->prod_price * $item->prod_qty, 2) }}
                                    </td>
                                    <td data-label="Remove" >
                                        <button type="submit"
                                            class="btn btn-primary" style="margin-left: 100px; background-color: rgb(55, 183, 55)" >Update</button>
                                        <button type="button" style="margin-right: -88px" class="btn btn-danger"
                                            onclick="confirmDelete('{{ url('cartdelete', $item->id) }}')">Delete</button>
                                    </td>
                                </tr>


                            </form>
                            @php $total += $item->prod_price * $item->prod_qty; @endphp
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div><!-- /.container -->
    </section><!-- /.cart-table -->


    <section class="proceed-to-checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="proceed-to-checkout__cupon">
                        <input type="text" placeholder="Enter Coupon Code">
                        <button type="submit" class="thm-btn">Apply coupon</button><!-- /.thm-btn -->
                    </div><!-- /.proceed-to-checkout__cupon -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <ul class="list-unstyled proceed-to-checkout__list">
                        <li>
                            <span>Subtotal</span>
                            <i>Rs. {{ $total }}</i>
                        </li>
                        <li>
                            <span>Shipping Cost</span>
                            <i>Rs. 00.00</i>
                        </li>
                        <li>
                            <span>Total</span>
                            <i>Rs. {{ $total }}</i>
                        </li>
                    </ul><!-- /.list-unstyled proceed-to-checkout__list -->
                    <div class="proceed-to-checkout__buttons">

                        <a href="{{url('checkout')}}" class="thm-btn ">Checkout</a>
                    </div><!-- /.proceed-to-checkout__buttons -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.proceed-to-checkout -->








    <script>
        document.querySelectorAll('.qty-control__reduce').forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input[type="number"]');
                if (input && parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                }
            });
        });

        document.querySelectorAll('.qty-control__increase').forEach(btn => {
            btn.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input[type="number"]');
                if (input) {
                    input.value = parseInt(input.value) + 1;
                }
            });
        });
    </script>
    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this item?')) {
                window.location.href = url;
            }
        }
    </script>

</x-site-layout>
