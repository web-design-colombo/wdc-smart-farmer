<header class="header">
    <!-- Topbar -->
    <!--  -->
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="flex lg:flex-row md:flex-row flex-col items-center">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="/"><img src="/img/logo.png" alt="#" style="max-width: 60%;"></a>
                        </div>


                    </div>
                    <div class="flex lg:flex-row md:flex-row flex-col items-center " style="margin-left: 8%">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="active"><a href="#">Get Involved<i
                                                class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Take action</a></li>
                                            <li><a href="index.html">Communities</a></li>
                                            <li><a href="index.html">Join the RHS</a></li>
                                            <li><a href="index.html">Support us</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Farming<i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Plants</a></li>
                                            <li><a href="index.html">Advice</a></li>


                                        </ul>
                                    </li>

                                    <li><a href="#"> Services </a></li>


                                    <li><a href="contact.html">Shop</a></li>
                                    </li>
                                    <li><a href="contact.html">Community</a></li>
                                    </li>
                                    <li>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>



                    <div class="hidden sm:flex sm:items-center sm:ms-6"
                        style="margin-top: 28px;     margin-left: 8%;
                    ">
                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <!-- Settings Dropdown with User Name -->
                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        <span class="mr-2">{{ Auth::user()->name }}</span>
                                        <svg class="-me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                    <div class="flex lg:flex-row md:flex-row flex-col items-center" style="margin-top: 48px; ">



                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden ">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
