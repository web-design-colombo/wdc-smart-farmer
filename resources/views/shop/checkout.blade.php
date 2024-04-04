<x-shop-layout>
    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Shipping and Checkout</h2>
            <div class="checkout-steps">
                <a href="shop_cart.html" class="checkout-steps__item">
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
                <a href="shop_order_complete.html" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
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
                                    <input type="text" value="{{Auth::user()->name}}" class="form-control" id="checkout_first_name" placeholder="First Name" name="name">
                                    <label for="checkout_first_name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating my-3">
                                    <input type="text" value="{{Auth::user()->name}}" class="form-control" id="checkout_last_name" placeholder="Last Name" name="last_name">
                                    <label for="checkout_last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_country" placeholder="Country" name="country">
                                    <label for="checkout_country">Country</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_address" placeholder="Street Address" name="address">
                                    <label for="checkout_address">Street Address</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_city" placeholder="Town / City" name="city">
                                    <label for="checkout_city">Town / City</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_zipcode" placeholder="Postcode / ZIP" name="zip_code">
                                    <label for="checkout_zipcode">Postcode / ZIP</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_province" placeholder="Province" name="province">
                                    <label for="checkout_province">Province</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="text" class="form-control" id="checkout_phone" placeholder="Phone" name="phone">
                                    <label for="checkout_phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating my-3">
                                    <input type="email" value="{{Auth::user()->email}}" class="form-control" id="checkout_email" placeholder="Your Mail" name="email">
                                    <label for="checkout_email">Your Mail</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-3">
                                <textarea name="order_notes" class="form-control form-control_gray" placeholder="Order Notes (optional)" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-checkout">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>

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
                            @foreach($cartItem as $item)
                                <tr>
                                    <td>{{$item->prod_name}}</td>
                                    <td>{{ number_format($item->prod_price * $item->prod_qty, 2) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout__payment-methods">
                        <div class="form-check">
                            <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
                            <label class="form-check-label" for="checkout_payment_method_1">
                                Direct bank transfer
                                <span class="option-detail d-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_3">
                            <label class="form-check-label" for="checkout_payment_method_3">
                                Cash on delivery
                                <span class="option-detail d-block">Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</span>
                            </label>
                        </div>
                        <div class="policy-text">
                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="terms.html" target="_blank">privacy policy</a>.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-checkout">PLACE ORDER</button>
                </div>
            </div>
        </section>
    </main>
</x-shop-layout>
