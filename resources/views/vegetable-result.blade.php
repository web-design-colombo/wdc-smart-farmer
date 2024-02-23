<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Vegetable Calculator</title>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            padding: 2rem;
            border-radius: 0 0 1rem 1rem;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .result-card {
            background-color: white;
            border: 1px solid #E2E8F0;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .result-card h2 {
            color: #48BB78;
        }

        .result-card p {
            color: #4A5568;
        }
    </style>

</head>

<body class="bg-gray-100">

    <div class="header">
        <div class="container">
            <div class="navbar">
                <!-- Logo -->
                <div class="logo" style="margin-right: 1%; width: 15%;">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="/img/logo.png" alt="#" class="max-w-40" />
                    </a>
                </div>

                <h1
                    style="margin-right: 10%; margin-left: 14%; font-size: 36px; font-family: Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 4px;">
                    Plant Calculator</h1>

                <button
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                    style="margin-right: 20px">
                    <a href="{{ url('/') }}">Home</a>
                </button>
                <!-- Trigger Button -->
                <button onclick="toggleDropdown()"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                    <span class="mr-2">{{ Auth::user()->name }}</span>
                    <svg class="-me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <!-- Dropdown Content -->
                <div id="dropdownContent" class="dropdown-content" style="display: none;">
                    <!-- Account Management -->
                    <div onclick="manageAccount()" class="block px-4 py-2 text-xs text-gray-400 cursor-pointer">
                        {{ __('Manage Account') }}
                    </div>

                    <a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <a href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                    @endif

                    <div class="border-t border-gray-200"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">{{ __('Log Out') }}</button>
                    </form>
                </div>

                <script>
                    function toggleDropdown() {
                        var dropdownContent = document.getElementById("dropdownContent");
                        dropdownContent.style.display = (dropdownContent.style.display === "none") ? "block" : "none";
                    }

                    function manageAccount() {
                        // Add your logic for handling the 'Manage Account' click
                        alert("Manage Account Clicked!");
                    }
                </script>
            </div>
        </div>
    </div>


    <div class="container mx-auto mt-8 p-8 grid grid-cols-1 lg:grid-cols-2 gap-8">

        @isset($totalPlantCost)
            <div class="result-card bg-green-100 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Total Plant Cost</h2>
                <p class="text-xl font-bold">Rs. {{ number_format($totalPlantCost, 2) }}</p>
            </div>
        @endisset

        @isset($totalFertilizerCost)
            <div class="result-card bg-green-200 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Total Fertilizer Cost</h2>
                <p class="text-xl font-bold">Rs. {{ number_format($totalFertilizerCost, 2) }}</p>
            </div>
        @endisset

        @isset($totalNumberOfPlants)
            <div class="result-card bg-green-300 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Total Number of Plants</h2>
                <p class="text-xl font-bold">{{ $totalNumberOfPlants }}</p>
            </div>
        @endisset

        @isset($selectedVegetable)
            <div class="result-card bg-green-400 p-6 rounded-lg col-span-2">
                <h2 class="text-2xl font-semibold mb-4">Sale Price Comparison for {{ $selectedVegetable->name }}</h2>

                <p class="mb-2">Expected Yield per Plant: {{ $selectedVegetable->expected_yield_per_plant }} kg</p>
                <p class="mb-2">Current Market Price per kg:
                    Rs. {{ number_format($selectedVegetable->current_market_price, 2) }}</p>

                @php
                    $harvestSalePrice = $salePriceAtHarvest;
                    $todaySalePrice = $salePriceToday;
                @endphp

                <p class="mb-2">Sale Price per 1kg at Harvest Time: RS. {{ number_format($harvestSalePrice, 2) }}</p>
                <p class="mb-2">Sale Price Today when All are Sold: Rs. {{ number_format($todaySalePrice, 2) }}</p>
            </div>
        @endisset

    </div>
    <footer class=" p-4 text-white text-center" style="background-color: #2f9c2f">
        <div class="container mx-auto">
            <p class="text-sm">&copy; 2024 Buy Vegetables. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
