<x-shop-layout>
    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Shipping and Checkout</h2>
            <div class="checkout-steps">
                <a href="shop_cart.html" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </a>
                <a href="shop_checkout.html" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </a>

            </div>
            <form action="{{ url('place-oder') }}" method="POST">
                @csrf
                <div class="checkout-form">
                    <div class="billing-info__wrapper">
                        <h4>BILLING DETAILS</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" value="{{ Auth::user()->name }}"
                                        class="form-control firstname" id="checkout_first_name" placeholder="First Name"
                                        name="name">
                                    <label for="checkout_first_name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" value="{{ Auth::user()->name }}" class="form-control lastname"
                                        id="checkout_last_name" placeholder="Last Name" name="last_name">
                                    <label for="checkout_last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control country" id="checkout_country"
                                        placeholder="Country" name="country">
                                    <label for="checkout_country">Country</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating mt-3 mb-3">
                                    <input type="text" class="form-control address" id="checkout_address"
                                        placeholder="Street Address" name="address">
                                    <label for="checkout_address">Street Address</label>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control city" id="checkout_city"
                                        placeholder="Town / City" name="city">
                                    <label for="checkout_city">Town / City</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control zipcode" id="checkout_zipcode"
                                        placeholder="Postcode / ZIP" name="zip_code">
                                    <label for="checkout_zipcode">Postcode / ZIP</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control province" id="checkout_province"
                                        placeholder="Province" name="province">
                                    <label for="checkout_province">Province</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control phone" id="checkout_phone"
                                        placeholder="Phone" name="phone">
                                    <label for="checkout_phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="email" value="{{ Auth::user()->email }}" class="form-control email"
                                        id="checkout_email" placeholder="Your Mail" name="email">
                                    <label for="checkout_email">Your Mail</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <textarea name="order_notes" class="form-control form-control_gray" placeholder="Order Notes (optional)" cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="checkout__totals-wrapper">
                        <div class="sticky-content">
                            <div class="checkout__totals">
                                <h3>Your Order</h3>
                                <table class="checkout-cart-items">
                                    <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th>SUBTOTAL</th>
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
                                            <td><strong>Total:</strong></td>
                                            <td><strong>{{ number_format($grandTotal, 2) }}</strong></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>

                            <button class="btn btn-primary btn-checkout" id="place-order-btn" value="">PLACE ORDER /
                                COD</button>
                            {{-- <button type="button" class="btn btn-primary razorpay_btn" style="margin-top: 6px">PLACE
                                ORDER / BANK</button> --}}
                            {{-- create form and button --}}

                            <form  action="{{url("session")}}" method="POST">
                                <button id="checkout-live-button" type="submit" class="btn" style="margin-top: 6px">PLACE ORDER / BANK</button>
                            </form>


                            {{-- end cart payment  --}}

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



                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

</x-shop-layout>
