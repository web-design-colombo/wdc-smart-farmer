<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        .containerr {
            display: flex;
            align-items: flex-start;
        }

        .sidenav {
            width: 280px;
            background-color: #4CAF50;
            padding-top: 20px;
            padding-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            min-height: 100vh;
        }

        .sidenav a i {
            margin-right: 30px;
            margin-left: 6px;

        }

        .sidenav a:hover {
            background-color: #1b4f1f;
        }

        .sidenav a {
            text-decoration: none;
            font-size: 18px;
            color: white;
            padding: 20px 10px;
            text-align: center;
            width: 100%;
            transition: background-color 0.3s;
            display: flex;
            align-items: flex-start;
            /* Add this line */
        }

        .sidenav a:hover {
            background-color: #1b4f1f;
        }

        .left {
            flex-grow: 1;
            padding: 20px;
        }

        .right {
            flex-grow: 1;
            padding: 20px;
        }

        .hidden {
            display: none;
        }

        .alert {
            margin-bottom: 1rem;
            padding: .75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-close {
            cursor: pointer;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: .25rem;
            display: inline-flex;
            align-items: center;
            padding: .5rem .75rem;
            margin-bottom: 1rem;
        }

        .alert-close svg {
            fill: #155724;
            height: 1em;
            width: 1em;
        }
    </style>

    <!-- Scripts -->
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const sidenavLinks = document.querySelectorAll('.sidenav a');
        //     const contentContainers = document.querySelectorAll('.content-container');

        //     sidenavLinks.forEach(link => {
        //         link.addEventListener('click', (event) => {
        //             event.preventDefault();
        //             const targetId = link.getAttribute('href').substring(1);
        //             contentContainers.forEach(container => {
        //                 if (container.id === `${targetId}-content`) {
        //                     container.classList.remove('hidden');
        //                 } else {
        //                     container.classList.add('hidden');
        //                 }
        //             });
        //         });
        //     });
        // });
    </script>
</head>

<body>
   <!-- Header Inner -->
   <div class="header-inner">
    <div class="container">
        <div class="inner">
            <div class="flex  items-center py-0">
                <!-- Logo -->
                <div class="logo" style="margin-right: 65%; margin-left: 5%;">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="/img/logo.png" alt="#" class="max-w-40" />
                    </a>
                </div>



                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 me-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif

                        <div>
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
<!--/ End Header Inner -->

    <div class="containerr">
        <div class="sidenav">
            <a href="{{ route('admin.user.index') }}"><i class="fas fa-users"></i> Users Management</a>
            <a href="{{ route('admin.product-category.index') }}"><i class="fas fa-cogs"></i> Product Category</a>
            <a href="#services"><i class="fas fa-file-alt"></i> Articles and Tutorials</a>
            <a href="#services"><i class="fas fa-star"></i> Rating & Reviews</a>
            <a href="#services"><i class="fas fa-cogs"></i> Services</a>
        </div>

        <div class="left">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
