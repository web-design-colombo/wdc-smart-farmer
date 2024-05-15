<x-site-layout>
    <style>
        .orders-container {
            margin-left: 4%;
            margin-right: 4%;
            overflow-x: auto;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .orders-table th,
        .orders-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .orders-table thead th {
            background-color: #f7fafc;
        }

        .orders-table tbody tr:hover {
            background-color: #f0f4f8;
        }

        .status-pending {
            color: #f59e0b;
        }

        .status-completed {
            color: #10b981;
        }

        .action-link {
            color: #4f46e5;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .action-link:hover {
            color: #4338ca;
        }
    </style>

    <div class="overflow-x-auto orders-container" style="margin-bottom: 50px; margin-top: 50px;">
        <h1 class="text-3xl font-bold mb-6 text-center">Your Orders</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden divide-y divide-gray-200 orders-table">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3">ORDER ID</th>
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
                        <td class="px-6 py-4 whitespace-nowrap {{ $order->status == '0' ? 'status-pending' : 'status-completed' }}">
                            {{ $order->status == '0' ? 'pending' : 'completed' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ url('view-order/' . $order->id) }}" class="action-link">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-site-layout>
