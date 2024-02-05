<x-app-layout>
    {{--COntent  --}}
    <div class="breadcrumbs overlay" style="height: 20px; margin-bottom: 40px">

        <div class="container">

            <div class="bread-inner">
                <div class="row">

                    <div class="col-12" style="margin-top: -20px">
                        <h2>
                            <p style="color: #fff">Hello ! {{ Auth::user()->name }}</p>
                        </h2>


                        <ul class="bread-list">
                            <li> <a href="{{ url('/') }}">Home</a></li>

                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">My DashBoard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <section class="why-choose section" style="margin-top: 70px">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h3>Farm Guidance Dashboard</h3>
                            <p> Welcome to the Farm Guidance Dashboard, your central hub for precision farming and
                                data-driven decision-making. This intuitive platform is designed to assist farmers
                                like you in optimizing every aspect of your agricultural operations. From crop
                                management to resource allocation, our dashboard provides real-time insights and
                                actionable recommendations, allowing you to maximize yields while minimizing
                                environmental impact. </p>
                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Advocates for Modernization </li>
                                        <li><i class="fa fa-caret-right"></i>Sustainability Focus</li>
                                        <li><i class="fa fa-caret-right"></i>Empowering Farmers</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Innovative Farming Hub </li>
                                        <li><i class="fa fa-caret-right"></i>User-Friendly Technology</li>
                                        <li><i class="fa fa-caret-right"></i>Community-Centric</li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <!-- End Choose Left -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->


                        <video width="120%" height="100px" controls style="border-radius: 2%">
                            <source src="img/zz.mp4" type="video/mp4">
                            {{-- Your browser does not support the video tag. --}}
                        </video>

                        <!-- End Choose Rights -->
                    </div>
                </div>
            </div>
        </section>
    </div>
{{-- end Content --}}


<div class="hidden sm:flex sm:items-center sm:ms-6">
    <!-- Teams Dropdown -->
    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="ms-3 relative">
            <x-dropdown align="right" width="60">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                            {{ Auth::user()->currentTeam->name }}

                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </button>
                    </span>
                </x-slot>

                <x-slot name="content">
                    <div class="w-60">
                        <!-- Team Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            {{ __('Team Settings') }}
                        </x-dropdown-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-dropdown-link href="{{ route('teams.create') }}">
                                {{ __('Create New Team') }}
                            </x-dropdown-link>
                        @endcan

                        <!-- Team Switcher -->
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" />
                            @endforeach
                        @endif
                    </div>
                </x-slot>
            </x-dropdown>
        </div>
    @endif





</x-app-layout>
