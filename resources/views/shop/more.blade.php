<!-- This is an example component -->
<div>

    <!DOCTYPE html>
    <html lang="en" >
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap'><link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">





    <div class="py-6">
        <!-- Breadcrumbs -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="{{url('shop')}}" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
                <a href="#" class="hover:underline hover:text-gray-600">{{ $product->name }}</a>
                <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
            </div>
        </div>
        <!-- ./ Breadcrumbs -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 product_data">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="sm:flex sm:items-center px-6 py-4">
                    <div class="sm:flex-1 sm:mr-6">
                        <div class="rounded-lg bg-gray-100 mb-4 overflow-hidden">
                            <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Product Image" class="object-cover w-full h-64 sm:h-auto">
                        </div>
                    </div>

                    <div class="sm:flex-1">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2 leading-tight tracking-tight">{{ $product->name }}</h2>
                        <p class="text-gray-500 text-sm mb-4">By <a href="#" class="text-indigo-600 hover:underline">{{ $product->author }}</a></p>

                        <div class="flex items-center space-x-4 mb-4">
                            <div>
                                <div class="rounded-lg bg-gray-100 flex py-2 px-3 items-center">
                                    <span class="text-indigo-400 mr-1">Rs.</span>
                                    <span class="font-bold text-indigo-600 text-3xl">{{ $product->selling_price }}</span>
                                </div>
                                <p class="text-gray-400 text-sm mt-1">Inclusive of all Taxes.</p>
                            </div>

                            <div class="flex-1">
                                <p class="text-green-500 text-xl font-semibold"></p>
                            </div>
                        </div>

                        <p class="text-gray-500 mb-4">
                            {{ $product->description }}
                        </p>
                        <form action="{{ route('addToCart', $product->id) }}" method="POST">
                            @csrf
                            <div class="flex items-center mb-4 space-x-4">
                                <div class="flex items-center">
                                    <input id="quantity" type="number" name="quantity" min="1" max="100" value="1" class="appearance-none w-16 border rounded-xl border-gray-200 text-center h-14 focus:outline-none focus:ring focus:ring-indigo-500 qty-input">
                                </div>
                                <button type="submit" class="btn h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white transition duration-300 ease-in-out transform hover:-translate-y-1">
                                    Add to Cart
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- Include jQuery -->


        <!-- Include custom JavaScript -->

    </div>

    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('success'))
        <script>
            swal("Good job!", "{{session('success')}}", "success");
        </script>
    @endif

    @if(session('fail'))
        <script>
            swal("Product is already in the cart");
        </script>
    @endif

    @if(session('error'))
        <script>
            swal("You must be logged in to add products to cart");
        </script>
    @endif

    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
    </html>

</div>
