<x-site-layout>

    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                    <li><a href="https://pixydrops.com/agriox/shop.html">Shop</a></li>
                    <li>Checkout</li>
                </ul>
                <h2>Checkout</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->





    <section class="checkout-page">
        <form action="{{ url('place-oder') }}" method="POST">
            @csrf
            <div class="auto-container">
                <div class="row">

                    <h3 class="checkout__title">Billing Details</h3><!-- /.checkout__title -->


                    <div class="comment-one__form">
                        <div class="row">
                            <!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="First Name" name="name">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Last Name" name="last_name">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Country" name="country">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Address" name="address">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Town / City" name="city">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Province" name="province">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Zip Code" name="zip_code">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Email Address" name="email">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->
                    </div><!-- /.comment-one__form -->
                    <!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <h3 class="checkout__title">Your order</h3><!-- /.checkout__title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table checkout__table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $grandTotal = 0; // Initialize the grand total variable
                                    @endphp
                                    @foreach ($cartItem as $item)
                                        @php
                                            $totalItemPrice = $item->prod_price * $item->prod_qty; // Calculate the total for this item
                                            $grandTotal += $totalItemPrice; // Add this item's total to the grand total
                                        @endphp
                                        <tr>
                                            <td>{{ $item->prod_name }}</td>
                                            <td>{{ number_format($totalItemPrice, 2) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td><strong>{{ number_format($grandTotal, 2) }}</strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.col-lg-6 -->
                    {{-- <div class="col-lg-6">
                        <div class="checkout__payment">
                            <div class="checkout__payment__item checkout__payment__item--active">
                                <h3 class="checkout__payment__title">Direct Bank Transfer</h3>
                                <div class="checkout__payment__content">
                                    Make your payment directly into our bank account. Please
                                    use your Order ID as the payment reference. Your order
                                    wont be shipped until the funds have cleared.
                                </div><!-- /.checkout__payment__content -->
                            </div><!-- /.checkout__payment__item -->
                            <div class="checkout__payment__item">
                                <h3 class="checkout__payment__title">Paypal payment <img
                                        src="https://pixydrops.com/agriox/assets/images/update-14-09-2021/shop/paypal-1-1.png"
                                        alt=""></h3>
                                <div class="checkout__payment__content">
                                    Make your payment directly into our bank account. Please
                                    use your Order ID as the payment reference. Your order
                                    wont be shipped until the funds have cleared.
                                </div><!-- /.checkout__payment__content -->
                            </div><!-- /.checkout__payment__item -->
                        </div><!-- /.checkout__payment -->
                        <div class="text-right d-flex justify-content-end">

                            <a class="thm-btn" href="https://pixydrops.com/agriox/checkout.html">
                                Place your order
                            </a>
                        </div><!-- /.text-right -->

                    </div><!-- /.col-lg-6 --> --}}

                    {{-- submite button --}}
                    <div class="col-lg-6">
                        <div class="text-right d-flex justify-content-end">
                            <button type="submit"
                                    value="cash_on_delivery"
                                    name="payment_type"
                                    class="thm-btn">
                                <i class="fas fa-money-bill-wave" style="color: green; width: 50px"></i> Place Your Order<span style="color: red; font-weight: bold"> Cash on Delivery</span>
                            </button>
                        </div>
                        <br>
                        <div class="text-right d-flex justify-content-end">
                            <button type="submit"
                                    value="bank_transfer"
                                    name="payment_type"
                                    id="bankTransferBtn"
                                    class="thm-btn"
                                    style="background-color: rgb(184, 239, 184); width: 470px">
                                <i class="fas fa-university" style="color: blue; width: 50px"></i> Place Your Order <span style="color: red; font-weight: bold"> Bank Transfer</span>
                            </button>
                        </div><!-- /.text-right -->
                    </div>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    @if (session('success'))
                        <script>
                            swal("Order Complete !", "{{ session('success') }}", "success");
                        </script>
                    @endif

                    @if (session('fail'))
                        <script>
                            swal("!");
                        </script>
                    @endif

                    @if (session('error'))
                        <script>
                            swal("You must be logged in to Order products ");
                        </script>
                    @endif

                    @if ($errors->any())
                        <script>
                            swal("Validation Error", "{{ $errors->first() }}", "error");
                        </script>
                    @endif






                    <!-- /.row -->
                </div>
        </form>

        <!-- /.container -->
    </section><!-- /.checkout-page -->



</x-site-layout>
