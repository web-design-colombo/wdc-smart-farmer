
<x-shop-layout>


    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">

            <div class="order-complete">
                @foreach($orders as $order)

                <div class="order-info">

                    <div class="order-info__item">
                        <label>Full Name</label>
                        <span>{{ $order->name }}</span>
                    </div>
                    <div class="order-info__item">
                        <label>Email</label>
                        <span>{{ $order->email }}</span>
                    </div>
                    <div class="order-info__item">
                        <label>Contact No.</label>
                        <span>{{ $order->phone }}</span>
                    </div>
                    <div class="order-info__item">
                        <label>Shipping Address</label>
                        <span>{{ $order->address }}</span>
                    </div>
                    <div class="order-info__item">
                        <label>Zip Code</label>
                        <span>{{ $order->zip_code }}</span>
                    </div>
                </div>
                @endforeach
                <div class="checkout__totals-wrapper">
                    <div class="checkout__totals">
                        <h3>Your Order ITEMS</h3>
                        <table class="checkout-cart-items">
                            <thead>
                            <tr>
                                <th>PRODUCT NAME</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>

                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->products->selling_price }}</td>
                                    <td ><img src="{{ asset('uploads/product/'.$item->products->image) }}" alt="Product Image" width="60" ></td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-shop-layout>
