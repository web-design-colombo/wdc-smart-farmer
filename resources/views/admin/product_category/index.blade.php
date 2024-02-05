<x-admin-layout>

    <div id="services-content" class="content-container bg-green-50 p-6 rounded-md">
        @if (session('success'))
            <div class="alert bg-green-100 border-l-4 border-green-500 text-green-900 p-4 mb-4">
                <span>{{ session('success') }}</span>
                <span class="alert-close cursor-pointer float-right" onclick="this.parentElement.style.display='none';">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9 10.707l-4.641 4.641a.5.5 0 11-.707-.707L8.293 10 3.652 5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.641a.5.5 0 01.707 0z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        @endif

        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-3xl font-semibold leading-6 text-green-900">Product Categories</h1>
                <p class="mt-2 text-sm text-green-700">A list of all the product categories in your account including
                    their name, slug, and actions.</p>
            </div>
            <div class="mt-4 sm:ml-4 sm:flex-none">
                <a href="{{ route('admin.product-category.create') }}"
                    class="block rounded-md bg-green-500 px-4 py-2 text-center text-sm font-semibold text-white hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                    Create Category
                </a>
            </div>
        </div>

        <div class="mt-8">
            <div class="mt-8 overflow-x-auto">
                <table class="min-w-full bg-white divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-green-900">ID</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-green-900">Name</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-green-900">Slug</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-green-900">Actions</th>
                            <th class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($product_categories as $product_category)
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-900">{{ $product_category->id }}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-900">{{ $product_category->name }}</td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-900">{{ $product_category->slug }}</td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-green-900">
                                    <div class="flex gap-3">
                                        <a href="{{ route('admin.product-category.show', $product_category->id) }}"
                                            class="rounded-md bg-white px-4 py-2 text-sm font-semibold text-green-900 hover:bg-gray-50 transition-all duration-300">Show</a>
                                        <a href="{{ route('admin.product-category.edit', $product_category->id) }}"
                                            class="rounded-md bg-white px-4 py-2 text-sm font-semibold text-green-900 hover:bg-gray-50 transition-all duration-300">Edit</a>
                                        <form
                                            action="{{ route('admin.product-category.destroy', $product_category->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- {{ $product_categories->links() }} --}}
    </div>

</x-admin-layout>
