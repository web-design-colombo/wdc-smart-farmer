<x-shop-layout>
<main>
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Cart</h2>
        <div class="checkout-steps">
            <a href="shop_cart.html" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
            <span>Shopping Bag</span>
            <em>Manage Your Items List</em>
          </span>
            </a>
            <a href="shop_checkout.html" class="checkout-steps__item">
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
        <div class="shopping-cart">
            <div class="cart-table__wrapper">
                <table class="cart-table text-center">
                    <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $item)
                        @if($item->user_id == auth()->id())
                            <form action="{{ url('cartupdate', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <tr>
                                    <td>
                                        <div class="shopping-cart__product-item">
                                            <img loading="lazy" src="{{ asset('uploads/product/'.$item->prod_image) }}" width="120" height="120" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="shopping-cart__product-item__detail">
                                            <h4>{{$item->prod_name}}</h4>
                                            {{-- Add any additional product details here --}}
                                        </div>
                                    </td>
                                    <td>
                                        <span class="shopping-cart__product-price">{{$item->prod_price}}</span>
                                    </td>
                                    <td>
                                        <div class="qty-control position-relative">
                                            <input type="number" name="quantity" value="{{$item->prod_qty}}" min="1" class="qty-control__number text-center">
                                            <div class="qty-control__reduce">-</div>
                                            <div class="qty-control__increase">+</div>
                                        </div><!-- .qty-control -->
                                    </td>
                                    <td>
                                        <span class="shopping-cart__subtotal">{{ number_format($item->prod_price * $item->prod_qty, 2) }}</span>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ url('cartdelete', $item->id) }}')">Delete</button>
                                    </td>
                                </tr>
                            </form>
                            @php $total += $item->prod_price * $item->prod_qty; @endphp
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="shopping-cart__totals-wrapper">
                <div class="sticky-content">
                    <div class="shopping-cart__totals mt-40">
                        <h3>Cart Totals</h3>
                        <table class="cart-totals">
                            <tbody>
                            <tr>
                                <th>Total</th>
                                <td>Rs. {{ $total }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mobile_fixed-btn_wrapper">
                        <div class="button-wrapper container">
                            <a href="{{url('checkout')}}">
                            <button class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>




//script
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
<!-- Customer Login Form -->
<div class="aside aside_right overflow-hidden customer-forms" id="customerForms">
    <div class="customer-forms__wrapper d-flex position-relative">
        <div class="customer__login">
            <div class="aside-header d-flex align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Login</h3>
                <button class="btn-close-lg js-close-aside ms-auto"></button>
            </div><!-- /.aside-header -->

            <form action="https://uomo-html.flexkitux.com/Demo12/login_register.html" method="POST" class="aside-content">
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control form-control_gray" id="customerNameEmailInput" placeholder="name@example.com">
                    <label for="customerNameEmailInput">Username or email address *</label>
                </div>

                <div class="pb-3"></div>

                <div class="form-label-fixed mb-3">
                    <label for="customerPasswordInput" class="form-label">Password *</label>
                    <input name="password" id="customerPasswordInput" class="form-control form-control_gray" type="password" placeholder="********">
                </div>

                <div class="d-flex align-items-center mb-3 pb-2">
                    <div class="form-check mb-0">
                        <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-secondary" for="flexCheckDefault">Remember me</label>
                    </div>
                    <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
                </div>

                <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

                <div class="customer-option mt-4 text-center">
                    <span class="text-secondary">No account yet?</span>
                    <a href="login_register.html#register-tab" class="btn-text js-show-register">Create Account</a>
                </div>
            </form>
        </div><!-- /.customer__login -->

        <div class="customer__register">
            <div class="aside-header d-flex align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
                <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
            </div><!-- /.aside-header -->

            <form action="https://uomo-html.flexkitux.com/Demo12/login_register.html" method="POST" class="aside-content">
                <div class="form-floating mb-4">
                    <input name="username" type="text" class="form-control form-control_gray" id="registerUserNameInput" placeholder="Username">
                    <label for="registerUserNameInput">Username</label>
                </div>

                <div class="pb-1"></div>

                <div class="form-floating mb-4">
                    <input name="email" type="email" class="form-control form-control_gray" id="registerUserEmailInput" placeholder="user@company.com">
                    <label for="registerUserEmailInput">Email address *</label>
                </div>

                <div class="pb-1"></div>

                <div class="form-label-fixed mb-4">
                    <label for="registerPasswordInput" class="form-label">Password *</label>
                    <input name="password" id="registerPasswordInput" class="form-control form-control_gray" type="password" placeholder="*******">
                </div>

                <p class="text-secondary mb-4">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>

                <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>

                <div class="customer-option mt-4 text-center">
                    <span class="text-secondary">Already have account?</span>
                    <a href="#" class="btn-text js-show-login">Login</a>
                </div>
            </form>
        </div><!-- /.customer__register -->
    </div><!-- /.customer-forms__wrapper -->
</div><!-- /.aside aside_right -->

<!-- Cart Drawer -->
<div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">1</span> ) </h3>
        <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->

    <div class="aside-content cart-drawer-items-list">
        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-1.jpg" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Zessi Dresses</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Yellow</p>
                <p class="cart-drawer-item__option text-secondary">Size: L</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="1" min="1" class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$99</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

        <hr class="cart-drawer-divider">

        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-2.jpg" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Kirby T-Shirt</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Black</p>
                <p class="cart-drawer-item__option text-secondary">Size: XS</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="4" min="1" class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$89</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

        <hr class="cart-drawer-divider">

        <div class="cart-drawer-item d-flex position-relative">
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="../images/cart-item-3.jpg" alt="">
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal">Cableknit Shawl</h6>
                <p class="cart-drawer-item__option text-secondary">Color: Green</p>
                <p class="cart-drawer-item__option text-secondary">Size: L</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="3" min="1" class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div><!-- .qty-control -->
                    <span class="cart-drawer-item__price money price">$129</span>
                </div>
            </div>

            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        </div><!-- /.cart-drawer-item d-flex -->

    </div><!-- /.aside-content -->

    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
        <hr class="cart-drawer-divider">
        <div class="d-flex justify-content-between">
            <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
            <span class="cart-subtotal fw-medium">$176.00</span>
        </div><!-- /.d-flex justify-content-between -->
        <a href="shop_cart.html" class="btn btn-light mt-3 d-block">View Cart</a>
        <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div><!-- /.aside-content -->
</div><!-- /.aside -->

<!-- Sitemap -->
<div class="modal fade" id="siteMap" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="sitemap d-flex">
            <div class="w-50 d-none d-lg-block">
                <img loading="lazy" src="../images/nav-bg.jpg" alt="Site map" class="sitemap__bg">
            </div><!-- /.sitemap__bg w-50 d-none d-lg-block -->
            <div class="sitemap__links w-50 flex-grow-1">
                <div class="modal-content">
                    <div class="modal-header">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active rounded-1 text-uppercase" id="pills-item-1-tab" data-bs-toggle="pill" href="#pills-item-1" role="tab" aria-controls="pills-item-1" aria-selected="true">WOMEN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-1 text-uppercase" id="pills-item-2-tab" data-bs-toggle="pill" href="#pills-item-2" role="tab" aria-controls="pills-item-2" aria-selected="false">MEN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-1 text-uppercase" id="pills-item-3-tab" data-bs-toggle="pill" href="#pills-item-3" role="tab" aria-controls="pills-item-3" aria-selected="false">KIDS</a>
                            </li>
                        </ul>
                        <button type="button" class="btn-close-lg" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="tab-content col-12" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-item-1" role="tabpanel" aria-labelledby="pills-item-1-tab">
                                <div class="row">
                                    <ul class="nav nav-tabs list-unstyled col-5 d-block" id="myTab" role="tablist">
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline active" id="tab-item-1-tab" data-bs-toggle="tab" href="#tab-item-1" role="tab" aria-controls="tab-item-1" aria-selected="true"><span class="rline-content">WOMEN</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="tab-item-2-tab" data-bs-toggle="tab" href="#tab-item-2" role="tab" aria-controls="tab-item-2" aria-selected="false"><span class="rline-content">MAN</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" id="tab-item-3-tab" data-bs-toggle="tab" href="#tab-item-3" role="tab" aria-controls="tab-item-3" aria-selected="false"><span class="rline-content">KIDS</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">HOME</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">COLLECTION</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline text-red" href="#">SALE UP TO 50% OFF</a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">NEW</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">SHOES</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">ACCESSORIES</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">JOIN LIFE</span></a>
                                        </li>
                                        <li class="nav-item position-relative" role="presentation">
                                            <a class="nav-link nav-link_rline" href="#"><span class="rline-content">#UOMOSTYLE</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content col-7" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab-item-1" role="tabpanel" aria-labelledby="tab-item-1-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">New</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Sets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Denim</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bags</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                                                </li>
                                            </ul><!-- /.sub-menu -->
                                        </div>
                                        <div class="tab-pane fade" id="tab-item-2" role="tabpanel" aria-labelledby="tab-item-2-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">New</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Sets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Denim</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Sweatshirts and Hoodies</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shirts & Blouses</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">T-shirts & Tops</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bags</a>
                                                </li>
                                            </ul><!-- /.sub-menu -->
                                        </div>
                                        <div class="tab-pane fade" id="tab-item-3" role="tabpanel" aria-labelledby="tab-item-3-tab">
                                            <ul class="sub-menu list-unstyled">
                                                <li class="sub-menu__item">
                                                    <a href="about.html" class="menu-link menu-link_us-s">Gift Card</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Collaborations®</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Sets</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Denim</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">New</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Best Sellers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Overshirts</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jackets & Coats</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Jeans</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shorts and Bermudas</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Dresses</a>
                                                </li>
                                                <li class="sub-menu__item">
                                                    <a href="#" class="menu-link menu-link_us-s">Bags</a>
                                                </li>
                                            </ul><!-- /.sub-menu -->
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="tab-pane fade" id="pills-item-2" role="tabpanel" aria-labelledby="pills-item-2-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.
                            </div>
                            <div class="tab-pane fade" id="pills-item-3" role="tabpanel" aria-labelledby="pills-item-3-tab">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                            </div>
                        </div>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.sitemap__links w-50 flex-grow-1 -->
        </div>
    </div><!-- /.modal-dialog modal-fullscreen -->
</div><!-- /.sitemap position-fixed w-100 -->


<!-- Go To Top -->
<div id="scrollTop" class="visually-hidden end-0"></div>

<!-- Page Overlay -->
<div class="page-overlay"></div><!-- /.page-overlay -->




</x-shop-layout>
