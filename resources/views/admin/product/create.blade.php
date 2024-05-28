<x-admin-layout>




    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900"  >
        <div id="main-content" class="relative w-full h-full overflow-y-auto  lg:ml-64 dark:bg-gray-900" >
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
                                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                                aria-current="page">Products</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Create Product
                            </h1>
                            </h1>
                        </div>

                    </div>
                </div>
                <div style="margin-left: -40px">
                    <form action="{{ url('product-add') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg overflow-hidden shadow-md px-8 pt-6 pb-8 mb-4 ml-10 mr-10">
                        @csrf
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter Product name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="small_description" class="block text-gray-700 text-sm font-bold mb-2">Small Description</label>
                                <input type="text" id="small_description" name="small_description" placeholder="Enter small description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea id="description" name="description" rows="3" placeholder="Enter Product description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="original_price" class="block text-gray-700 text-sm font-bold mb-2">Original Price</label>
                                <input type="number" id="original_price" name="original_price" placeholder="Enter original price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="selling_price" class="block text-gray-700 text-sm font-bold mb-2">Selling Price</label>
                                <input type="number" id="selling_price" name="selling_price" placeholder="Enter selling price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                                <div class="flex items-center border rounded-md shadow-sm">
                                    <input type="file" id="image" name="image" class="hidden">
                                    <label for="image" id="uploadLabel" class="cursor-pointer h-10 flex items-center justify-center px-4 bg-gray-50 text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500">
                                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        Upload Image
                                    </label>
                                </div>
                                <!-- Display area for the uploaded image -->
                                <div id="fileName" class="mt-2 text-sm text-gray-500"></div>
                            </div>
                            <script>
                                document.getElementById('image').addEventListener('change', function(e) {
                                    const fileInput = e.target;
                                    const fileNameDisplay = document.getElementById('fileName');
                                    const uploadLabel = document.getElementById('uploadLabel');

                                    if (fileInput.files.length > 0) {
                                        fileNameDisplay.textContent = fileInput.files[0].name;
                                        uploadLabel.classList.remove('bg-gray-50', 'hover:bg-gray-100');
                                        uploadLabel.classList.add('bg-green-500', 'hover:bg-green-600');
                                        // Optionally, add a checkmark icon inside the upload button
                                        uploadLabel.innerHTML += '<svg class="h-5 w-5 ml-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                                    } else {
                                        fileNameDisplay.textContent = '';
                                        uploadLabel.classList.remove('bg-green-500', 'hover:bg-green-600');
                                        uploadLabel.classList.add('bg-gray-50', 'hover:bg-gray-100');
                                        uploadLabel.innerHTML = '<svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>Upload Image';
                                    }
                                });
                            </script>


                            <div class="w-1/2 ml-2" style="margin-top: 10px">
                                <select class="form-select mt-4 pt-2" name="cate_id" aria-label="Default select example">
                                    <option value="">Select a Product</option>
                                    @foreach($category as $Category)
                                        <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="qty_id" class="block text-gray-700 text-sm font-bold mb-2">Quantity ID</label>
                                <input type="number" id="qty_id" name="qty_id" placeholder="Enter quantity ID" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="tax" class="block text-gray-700 text-sm font-bold mb-2">Tax</label>
                                <input type="number" id="tax" name="tax" placeholder="Enter tax" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                                <select id="status" name="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="tranding" class="block text-gray-700 text-sm font-bold mb-2">Tranding</label>
                                <input type="checkbox" id="tranding" name="tranding" class="mr-2 leading-tight">
                            </div>
                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Sale</label>
                                <select id="status" name="sale" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                    <option value="0">Normal</option>
                                    <option value="1">Sale</option>
                                </select>
                            </div>

                        </div>
                        <div class="mb-4 flex">
                            <div class="w-1/2 mr-2">
                                <label for="meta_title" class="block text-gray-700 text-sm font-bold mb-2">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" placeholder="Enter meta title" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                            <div class="w-1/2 ml-2">
                                <label for="meta_description" class="block text-gray-700 text-sm font-bold mb-2">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" rows="2" placeholder="Enter meta description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="meta_keywords" class="block text-gray-700 text-sm font-bold mb-2">Meta Keywords</label>
                            <input type="text" id="meta_keywords" name="meta_keywords" placeholder="Enter meta keywords" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        <input type="submit" value="Submit" style="width: 100%;
                        background-color: #4CAF50;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;">

                    </form>
                </div>



                </html>



</x-admin-layout>
