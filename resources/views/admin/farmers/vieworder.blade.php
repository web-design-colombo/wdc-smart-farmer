<x-admin-layout>
    <div class="" style="margin-left: 280px; padding-top: 100px; margin-right: 20px;">
        <div class="rounded-t-lg h-32 overflow-hidden">
            <img class="object-cover object-top w-full" src="{{ asset('img/tomatoes-1561565_1280.jpg') }}"
                alt='Mountain'>
        </div>
        <div class="mx-auto w-32 h-32 relative -mt-16 bads-4 bads-white rounded-full overflow-hidden">
            <img class="object-cover object-center h-32" src='{{ asset('img/R.jpg') }}'
                alt='Woman looking front' style="width: 120px">
        </div>
        <div class="text-center mt-2">
            <h2 class="font-semibold">{{ $ads->name }}</h2>
            <p class="text-gray-500">{{ $ads->phone }}</p>
        </div>
        <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="3 11 22 2 13 21 11 13 3 11" />
                </svg>
                <div><strong>Address</strong></div>

                <div>{{ $ads->address }}</div>

            </li>

            <li class="flex flex-col items-center justify-between">
                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>

                <div><strong>City</strong></div>

                <div>{{ $ads->city }}</div>
            </li>
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="3 9 12 15 21 9 12 3 3 9" />
                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                    <line x1="3" y1="19" x2="9" y2="13" />
                    <line x1="15" y1="13" x2="21" y2="19" />
                </svg>
                <div><strong>Email</strong></div>

                <div>{{ $ads->email }}</div>
            </li>
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div><strong> Status</strong></div>

                <div>{{ $ads->status == 1 ? 'Delivered' : 'Pending' }}</div>
            </li>
        </ul>

    </div>


    <div class=" dark:bg-gray-800 py-8" style="margin-left: 280px;padding-top: 80px">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="">
                    <div class="" style="padding-left: 380px">
                        <img  src="{{ asset('uploads/product/'.$ads->image) }}" alt="Product Image" style="width: 350px">
                    </div>

                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $ads->name }}</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        {{ $ads->small_description }}
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                            <span class="text-gray-600 dark:text-gray-300">Rs. {{ $ads->original_price }}</span>
                        </div>

                    </div>
                    <div class="mb-4">

                    </div>

                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                            {{ $ads->description }}</p>
                    </div>
                    <form action="{{ url('adsupdatepro/' .$ads->id) }}" method="POST" class="mt-6">
                        @csrf
                        @method('PUT')
                        <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
                        <select name="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="0" {{ $ads->sellstatus == 0 ? 'selected' : '' }}>Pending</option>
                            <option value="1" {{ $ads->sellstatus == 1 ? 'selected' : '' }}>Approve</option>
                        </select>
                        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" style="background-color: green">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-admin-layout>
