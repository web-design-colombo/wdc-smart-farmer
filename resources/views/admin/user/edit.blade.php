<x-admin-layout>
    <style>
        #aa {
            border-radius: 5px;
            margin-left: -40px
        }

        input[type=text],
        input[type=email],
        input[type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900" style="padding-top: 90px">
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div
                    class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full mb-1">
                        <div class="mb-4">
                            <nav class="flex mb-5" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                    <li class="inline-flex items-center">
                                        <a href="#"
                                            class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                                </path>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <a href="#"
                                                class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Profile</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                                aria-current="page">Edit</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Edit Profile</h1>
                        </div>
                    </div>
                </div>
                <div id="aa">
                    <form action="{{ url('profile/' . $user->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg overflow-hidden shadow-md px-8 pt-6 pb-8 mb-4 ml-10 mr-10">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Enter your name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter your email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                            <input type="address" id="address" name="address" value="{{ old('address', $user->address)}}" placeholder="Enter a new address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                            <input type="city" id="city" value="{{ old('city', $user->city)}}" name="city" placeholder="Confirm your new city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>

                        
                        <div class="mb-4">
                            <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                            <select name="role" id="role" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>User</option>
                                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Buyer</option>
                                <option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Farmer</option>
                            </select>

                        <script>
                            document.getElementById('profile_picture').addEventListener('change', function(e) {
                                const fileInput = e.target;
                                const fileNameDisplay = document.getElementById('fileName');
                                const uploadLabel = document.getElementById('uploadLabel');

                                if (fileInput.files.length > 0) {
                                    fileNameDisplay.textContent = fileInput.files[0].name;
                                    uploadLabel.classList.remove('bg-gray-50', 'hover:bg-gray-100');
                                    uploadLabel.classList.add('bg-green-500', 'hover:bg-green-600');
                                    uploadLabel.innerHTML += '<svg class="h-5 w-5 ml-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                                } else {
                                    fileNameDisplay.textContent = '';
                                    uploadLabel.classList.remove('bg-green-500', 'hover:bg-green-600');
                                    uploadLabel.classList.add('bg-gray-50', 'hover:bg-gray-100');
                                    uploadLabel.innerHTML = '<svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>Upload Image';
                                }
                            });
                        </script>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </main>
        </div>
    </div>
</x-admin-layout>
