<x-admin-layout>
    <style>
        #aa {
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #f2f2f2;
            margin-right: 10px
        }

        input[type=textt],
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

        +
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
                                                class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">E-commerce</a>
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
                                                aria-current="page">Products</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Create Product
                                Category</h1>
                            </h1>
                        </div>

                    </div>
                </div>
                <div id="aa">
                    <form action="{{ url('category-add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="fname">First Name</label>
                        <input class="new" type="textt" id="name" name="name" placeholder="Enter category name">

                        <label for="lname">Slug</label>
                        <input type="textt" id="slug" name="slug" placeholder="Enter Category slug">

                        <label for="lname">Description</label>
                        <input type="textt" id="description" name="description"
                            placeholder="Enter Category Description">

                        <label for="country">Status</label>
                        <select id="country" name="status">
                            <option value="0"
                                {{ !empty($categories) && $categories->status == '0' ? 'selected' : '' }}>......
                            </option>
                            <option value="1"
                                {{ !empty($categories) && $categories->status == '1' ? 'selected' : '' }}>All
                                Category(Trending)</option>
                        </select>

                        <label for="lname">Meta Title</label>
                        <input type="textt" id="meta_title" name="meta_title" placeholder="Enter meta title">

                        <label for="lname">Meta
                            Description</label>
                        <input type="textt" id="lname" name="meta_description"
                            placeholder="Enter meta description">
                        <label for="lname">Meta Keywords</label>
                        <input type="textt" id="meta_keywords" name="meta_keywords" placeholder="Enter meta keywords">




                        <input type="submit" value="Submit">
                    </form>
                </div>



                </html>



</x-admin-layout>
