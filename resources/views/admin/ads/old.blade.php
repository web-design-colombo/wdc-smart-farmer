<x-admin-layout>
    <!-- resources/views/ads/show.blade.php -->
    <div class="bg-gray-100 rounded-lg shadow-md p-6">
        <div class="mb-6">
            <p class="text-lg font-bold text-green-600">User Information:</p>
            <div class="grid grid-cols-2 gap-4 mt-2">
                <div>
                    <p class="font-semibold">User Name:</p>
                    <p>{{ $ads->user_name }}</p>
                </div>
                <div>
                    <p class="font-semibold">User NIC:</p>
                    <p>{{ $ads->user_nic }}</p>
                </div>
                <div>
                    <p class="font-semibold">Shop Name:</p>
                    <p>{{ $ads->shop_name }}</p>
                </div>
                <div>
                    <p class="font-semibold">Shop Address:</p>
                    <p>{{ $ads->shop_address }}</p>
                </div>
                <div>
                    <p class="font-semibold">Phone Number:</p>
                    <p>{{ $ads->phone_number }}</p>
                </div>
                <div>
                    <p class="font-semibold">Status:</p>
                    <p class="text-green-600">{{ $ads->status == 1 ? 'Approved' : 'Pending' }}</p>
                </div>
            </div>
        </div>

        <!-- Display vegetables -->
        <div class="mb-6">
            <p class="text-lg font-bold text-green-600">Vegetables:</p>
            @php
            $vegetables = json_decode($ads->vegetables, true);
            @endphp

            @if(is_array($vegetables))
                <div class="grid grid-cols-2 gap-4 mt-2">
                    @foreach ($vegetables as $vegetable)
                        <div>
                            <p><span class="font-semibold text-green-600">Name:</span> {{ $vegetable['vegetable_name'] }}</p>
                            <p><span class="font-semibold text-green-600">Price:</span> ${{ $vegetable['vegetable_price'] }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-green-600">No vegetables found</p>
            @endif
        </div>

        <div class="mb-6">
            <p class="text-lg font-bold text-green-600">Description:</p>
            <p>{{ $ads->description }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Created At: {{ $ads->created_at }}</p>
            <p class="text-sm text-gray-500">Updated At: {{ $ads->updated_at }}</p>

            <!-- Update form -->
            <form action="{{ url('adsupdate/' .$ads->id) }}" method="POST" class="mt-6">
                @csrf
                @method('PUT')
                <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
                <select name="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    <option value="0" {{ $ads->status == 0 ? 'selected' : '' }}>Pending</option>
                    <option value="1" {{ $ads->status == 1 ? 'selected' : '' }}>Approve</option>
                </select>
                <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>
