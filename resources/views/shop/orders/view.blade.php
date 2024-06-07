<x-site-layout>
    <main class="bg-gray-100 min-h-screen">
        <div class="container mx-auto py-8">
            <section class="shop-checkout bg-white rounded-lg shadow-md">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-4">Order Summary</h2>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            @foreach($orders as $order)
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold mb-2">Order Information</h3>
                                <div class="flex items-center mb-2">
                                    <label class="w-32">Full Name</label>
                                    <span>{{ $order->name }}</span>
                                </div>
                                <div class="flex items-center mb-2">
                                    <label class="w-32">Email</label>
                                    <span>{{ $order->email }}</span>
                                </div>
                                <div class="flex items-center mb-2">
                                    <label class="w-32">Contact No.</label>
                                    <span>{{ $order->phone }}</span>
                                </div>
                                <div class="flex items-center mb-2">
                                    <label class="w-32">Shipping Address</label>
                                    <span>{{ $order->address }}</span>
                                </div>
                                <div class="flex items-center mb-2">
                                    <label class="w-32">Zip Code</label>
                                    <span>{{ $order->zip_code }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold mb-2">Your Order Items</h3>
                                <table class="w-full border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-2">PRODUCT NAME</th>
                                            <th class="px-4 py-2">QUANTITY</th>
                                            <th class="px-4 py-2">PRICE</th>
                                            <th class="px-4 py-2">Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->items as $item)
                                        <tr>
                                            <td class="px-4 py-2">{{ $item->products->name }}</td>
                                            <td class="px-4 py-2">{{ $item->qty }}</td>
                                            <td class="px-4 py-2">Rs. {{ $item->products->selling_price }}</td>
                                            <td class="px-4 py-2"><img src="{{ asset('uploads/product/'.$item->products->image) }}" alt="Product Image" class="w-16 h-16 object-cover"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="flex justify-end">
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Delete Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-site-layout>
