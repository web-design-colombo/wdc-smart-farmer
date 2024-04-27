<x-admin-layout>


    <h2 class="rounded-lg shadowfont-semibold text-xl text-gray-600 ml-10 pb-2 d-none d-lg-block">Orders History</h2>
    <div class="overflow-x-auto ml-10 mr-10 rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-center ">
            <thead class="bg-gray-50 " >
            <tr class="bg-green-500 text-white ">
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Order ID
                </th>
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Customer Name
                </th>
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Order Date
                </th>
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Total Price
                </th>
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                    Action
                </th>

            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($orders as $order)
                <tr class="text-center">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                     <td>{{ $order->created_at }}</td>
                    <td>{{ $order->tot }}</td>
                    <td>{{ $order->status == '0' ?'pending' : 'completed' }}</td>

                    <td class="py-4 pl-4 pr-3 text-sm font-medium">
                        <div class="flex gap-3">
                            <a href="{{ url('orderadmion/' . $order->id) }}"
                                class="rounded-md bg-red-400 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">View</a>

                        </div>
                    </td>
                </tr>


            @endforeach



            </tbody>
        </table>
    </div>
</x-admin-layout>

