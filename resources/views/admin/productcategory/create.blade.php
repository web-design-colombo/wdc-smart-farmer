<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-600 ml-10 pb-2">Create Category</h2>
    <form action="{{ url('category-add') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg overflow-hidden shadow-md px-8 pt-6 pb-8 mb-4 ml-10 mr-10">
        @csrf
        <div class="mb-4 flex">
            <div class="w-1/2 mr-2">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter category name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
            <div class="w-1/2 ml-2">
                <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug</label>
                <input type="text" id="slug" name="slug" placeholder="Enter category slug" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
            </div>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea id="description" name="description" rows="3" placeholder="Enter category description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
        </div>
        <div class="mb-4 flex">

            <div class="w-1/2 ml-2">
                <label for="popular" class="block text-gray-700 text-sm font-bold mb-2">Popular</label>
                <input type="checkbox" id="popular" name="popular" class="mr-2 leading-tight">
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
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
        </div>
    </form>


</x-admin-layout>
