<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-600 ml-10 pb-2">Add Product</h2>
    <form action="{{ url('productshgop-add/' . $product->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg overflow-hidden shadow-md px-8 pt-6 pb-8 mb-4 ml-10 mr-10">
        @method('PUT')
        @csrf
        <div class="mb-4 flex">
            <div class="w-1/2 mr-2">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" value="{{$product->name}}" name="name" placeholder="Enter category name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
            <div class="w-1/2 ml-2">
                <label for="small_description" class="block text-gray-700 text-sm font-bold mb-2">Small Description</label>
                <input type="text" id="small_description" value="{{$product->small_description}}" name="small_description" placeholder="Enter small description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea id="description" value="{{$product->description}}" name="description" rows="3" placeholder="Enter category description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
        </div>
        <div class="mb-4 flex">
            <div class="w-1/2 mr-2">
                <label for="original_price" class="block text-gray-700 text-sm font-bold mb-2">Original Price</label>
                <input type="number" id="original_price" value="{{$product->original_price}}" name="original_price" placeholder="Enter original price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
            <div class="w-1/2 ml-2">
                <label for="selling_price" class="block text-gray-700 text-sm font-bold mb-2">Selling Price</label>
                <input type="number" id="selling_price" value="{{$product->selling_price}}" name="selling_price" placeholder="Enter selling price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
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


            <div class="w-1/2 ml-2">
                <select class="form-select mt-4 pt-2" name="cate_id" aria-label="Default select example">
                    <option value="">Select a Category</option>
                    @foreach($category as $Category)
                        <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-4 flex">
            <div class="w-1/2 mr-2">
                <label for="qty_id" class="block text-gray-700 text-sm font-bold mb-2">Quantity ID</label>
                <input type="number" id="qty_id" value="{{ $Category->qty_id }}" name="qty_id" placeholder="Enter quantity ID" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
            <div class="w-1/2 ml-2">
                <label for="tax" class="block text-gray-700 text-sm font-bold mb-2">Tax</label>
                <input type="number" id="tax" value="{{ $Category->tax }}" name="tax" placeholder="Enter tax" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
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
                <label for="meta_title" class="block text-gray-700 text-sm font-bold mb-2">Meta Title</label>
                <input type="text" id="meta_title" value="{{ $Category->meta_title }}" name="meta_title" placeholder="Enter meta title" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
            <div class="w-1/2 ml-2">
                <label for="meta_description" class="block text-gray-700 text-sm font-bold mb-2">Meta Description</label>
                <textarea id="meta_description" value="{{ $Category->meta_description }}" name="meta_description" rows="2" placeholder="Enter meta description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
            </div>
        </div>
        <div class="mb-4">
            <label for="meta_keywords" class="block text-gray-700 text-sm font-bold mb-2">Meta Keywords</label>
            <input type="text" id="meta_keywords" value="{{ $Category->meta_keywords }}" name="meta_keywords" placeholder="Enter meta keywords" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
        </div>
    </form>
</x-admin-layout>
