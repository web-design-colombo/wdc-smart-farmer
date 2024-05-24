<x-admin-layout>

    <!-- https://gist.github.com/goodreds/5b8a4a2bf11ff67557d38c5e727ea86c -->

    <div class="" style="margin-left: 280px; padding-top: 100px; margin-right: 20px;">
        <div class="rounded-t-lg h-32 overflow-hidden">
            <img class="object-cover object-top w-full"
            src="{{ asset('img/tomatoes-1561565_1280.jpg') }}"
                alt='Mountain'>
        </div>
        <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
            <img class="object-cover object-center h-32" src='{{ asset('uploads/shopads/' . $ads->image) }}'
                alt='Woman looking front' style="width: 120px">
        </div>
        <div class="text-center mt-2">
            <h2 class="font-semibold">{{ $ads->user_name }}</h2>
            <p class="text-gray-500">{{ $ads->phone_number }}</p>
        </div>
        <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="3 11 22 2 13 21 11 13 3 11" />
                </svg>
                <div><strong> Shop Address</strong></div>

                <div>{{ $ads->shop_address }}</div>

            </li>

            <li class="flex flex-col items-center justify-between">
                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>

                <div><strong> Shop Name</strong></div>

                <div>{{ $ads->shop_name }}</div>
            </li>
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="3 9 12 15 21 9 12 3 3 9" />
                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                    <line x1="3" y1="19" x2="9" y2="13" />
                    <line x1="15" y1="13" x2="21" y2="19" />
                </svg>
                <div><strong> Shop Email</strong></div>

                <div>{{ $ads->user_nic }}</div>
            </li>
            <li class="flex flex-col items-center justify-around">
                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div><strong> Status</strong></div>

                <div>{{ $ads->status == 1 ? 'Approved' : 'Pending' }}</div>
            </li>
        </ul>

    </div>
    <!-- resources/views/ads/show.blade.php -->



    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto" style="margin-left: 280px">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Ad
                {{ $ads->id }}</h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">{{ $ads->created_at }}</p>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">
                        Vegetables</p>
                    <div
                        class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                        <div class="pb-4 md:pb-8 w-full md:w-40">
                            <img class="w-full hidden md:block" src="{{ asset('uploads/shopads/' . $ads->image) }}"
                                alt="dress" />
                            <img class="w-full md:hidden" src="{{ asset('uploads/shopads/' . $ads->image) }}"
                                alt="dress" />
                        </div>

                        @php
                            $vegetables = json_decode($ads->vegetables, true);
                        @endphp
                        @if (is_array($vegetables))
                            @foreach ($vegetables as $vegetable)
                                <div
                                    class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">



                                    <div class="w-full flex flex-col justify-start items-start space-y-8">

                                        <h3
                                            class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">
                                            {{ $vegetable['vegetable_name'] }}</h3>

                                    </div>
                                    <div class="flex justify-between space-x-8 items-start w-full">
                                        <p class="text-base dark:text-white xl:text-lg leading-6" style="color: red">
                                            Rs .{{ $vegetable['vegetable_price'] }}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-green-600">No vegetables found</p>
                        @endif
                    </div>
                    <br><strrong style="font-weight: bold"> Description</strrong>
                    <p class="text-green-600">{{ $ads->description }}</p>

                </div>

            </div>

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
                <button type="submit" class="mt-4 bg-green-200 text-white px-4 py-2 rounded-md hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-opacity-50" style="background-color: green">Update</button>
            </form>
        </div>
    </div>




</x-admin-layout>
