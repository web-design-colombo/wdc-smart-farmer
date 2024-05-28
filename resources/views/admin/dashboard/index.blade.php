<x-admin-layout>


    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900"
        style="padding-top: 80px;">
        <main>
            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3" style=" margin-left: 100px">
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">All Products</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">34</span>



                    </div>
                    <div class="w-full" id="new-products-chart"></div>
                </div>




                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Users</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">23</span>

                    </div>
                    <div class="w-full" id="week-signups-chart"></div>
                </div>

            </div>
            <div class="px-4 pt-6" style=" margin-left: 85px">
                <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                    <!-- Main widget -->

                    <!--Tabs widget -->
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800"
                        style="width: 500px; ">
                        <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                            Statistics this month
                            <button data-popover-target="popover-description" data-popover-placement="bottom-end"
                                type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg><span class="sr-only">Show information</span></button>
                        </h3>
                        <div data-popover id="popover-description" role="tooltip"
                            class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Statistics</h3>
                                <p>Statistics is a branch of applied mathematics that involves the collection,
                                    description, analysis, and inference of conclusions from quantitative data.</p>
                                <a href="#"
                                    class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
                                    more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg></a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select tab</label>
                            <select id="tabs"
                                class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Statistics</option>
                                <option>Services</option>
                                <option>FAQ</option>
                            </select>
                        </div>
                        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                            <li class="w-full">
                                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                                    aria-controls="faq" aria-selected="true"
                                    class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Sales
                                    products</button>
                            </li>
                            <li class="w-full">
                                <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                                    aria-controls="about" aria-selected="false"
                                    class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Top
                                    Customers</button>
                            </li>
                        </ul>
                        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                            <div class="hidden pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    {{-- give top sell products --}}




                                    @foreach ($topProducts as $product)
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center min-w-0">
                                                    <img class="flex-shrink-0 w-10 h-10"
                                                        src="{{ asset('uploads/product/' . $product->image) }}"
                                                        alt="{{ $product->name }} image">
                                                    <div class="ml-3">
                                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                                            {{ $product->name }}
                                                        </p>
                                                        <div
                                                            class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                    Rs. {{ number_format($product->selling_price, 2) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full" src="images/users/neil-sims.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Neil Sims
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    email@flowbite.com
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $3320
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full" src="images/users/bonnie-green.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Bonnie Green
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    email@flowbite.com
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $2467
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full" src="images/users/michael-gough.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Michael Gough
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    email@flowbite.com
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $2235
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full" src="images/users/thomas-lean.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Thomes Lean
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    email@flowbite.com
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $1842
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full" src="images/users/lana-byrd.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Lana Byrd
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    email@flowbite.com
                                                </p>
                                            </div>
                                            <div
                                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $1044
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div
                            class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                            <div>
                                <button
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                    type="button" data-dropdown-toggle="stats-dropdown">Last 7 days <svg
                                        class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <!-- Dropdown menu -->
                                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                    id="stats-dropdown">
                                    <div class="px-4 py-3" role="none">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                            role="none">
                                            Sep 16, 2021 - Sep 22, 2021
                                        </p>
                                    </div>
                                    <ul class="py-1" role="none">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Yesterday</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Today</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Last 7 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Last 30 days</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Last 90 days</a>
                                        </li>
                                    </ul>
                                    <div class="py-1" role="none">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Custom...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#"
                                    class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                    Full Report
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>




                    </div>

                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800"
                        style="margin-left: 40px; width: 500px">
                        <div class="w-full">
                            <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Audience by age
                            </h3>
                            <div class="flex items-center mb-2">
                                <div class="w-16 text-sm font-medium dark:text-white">50+</div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                        style="width: 18%"></div>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="w-16 text-sm font-medium dark:text-white">40+</div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                        style="width: 15%"></div>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="w-16 text-sm font-medium dark:text-white">30+</div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                        style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="w-16 text-sm font-medium dark:text-white">20+</div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                        style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                        <div id="traffic-channels-chart" class="w-full"></div>
                    </div>

                </div>

            </div>
        </main>
    </div>

</x-admin-layout>
