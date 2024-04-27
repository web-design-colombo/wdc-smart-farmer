<x-shop-layout>
    <div class="overflow-x-auto" style="margin-left: 4%; margin-right: 4%">
        <h1 class="text-3xl font-bold mb-6 text-center">Your Orders</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
{{--                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>--}}
{{--                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tracking Number</th>--}}
{{--                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Price</th>--}}
{{--   --}}             <th class="px-6 py-3">ORDER ID</th>
                <th class="px-6 py-3">TRACKING NUMBER</th>
                <th class="px-6 py-3">ORDER DATE & TIME</th>


                <th class="px-6 py-3">TOTAL PRICE</th>
                <th class="px-6 py-3">Status</th>

                <th class="px-6 py-3">Action</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach ($orders as $order)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $order->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $order->tracking_no }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $order->created_at }}</td>

                    <td class="px-6 py-4 whitespace-nowrap">{{ $order->tot }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $order->status == '0' ?'pending' : 'completed' }}</td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ url('view-order/'.$order->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-shop-layout>
