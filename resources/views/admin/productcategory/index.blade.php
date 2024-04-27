<x-admin-layout>
    <h2 class="rounded-lg shadowfont-semibold text-xl text-gray-600 ml-10  d-none d-lg-block" style="margin-bottom: -20px">Category List</h2>

    <div class="overflow-x-auto ml-10 mr-10 rounded-lg">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 mb-4">
                <span>{{ session('success') }}</span>
                <span class="alert-close cursor-pointer" onclick="this.parentElement.style.display='none';">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle w-4 h-4">
                        <path
                            d="M10 1a9 9 0 110 18 9 9 0 010-18zm0 2a7 7 0 100 14 7 7 0 000-14zm3.707 4.293a1 1 0 00-1.414-1.414L10 8.586l-2.293-2.293a1 1 0 10-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 11-1.414-1.414L8.293 10l-2.293-2.293a1 1 0 011.414-1.414L10 11.414l2.293 2.293a1 1 0 001.414-1.414L11.414 10l2.293-2.293z">
                        </path>
                    </svg>
                </span>
            </div>
        @endif

        <div class="mt-8">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-green-500 text-white">
                        <tr>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold">Name</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold">Description</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold">Meta Description</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold">Updated At</th>
                            <th class="px-3 py-3.5 text-left text-sm font-semibold">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $product)
                            <tr class="hover:bg-gray-100 transition-all duration-300">
                                <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $product->name }}</td>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $product->description }}</td>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $product->meta_description }}</td>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $product->updated_at }}</td>

                                <td class="py-4 pl-4 pr-3 text-sm font-medium">
                                    <div class="flex gap-3">
                                        <a href="{{ url('edit/' . $product->id) }}"
                                            class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Edit</a>
                                        <form action="{{ url('deleteproductcate/' . $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="rounded-md bg-red-500 px-4 py-2 text-sm font-semibold text-white hover:bg-red-600 transition-all duration-300">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</x-admin-layout>
