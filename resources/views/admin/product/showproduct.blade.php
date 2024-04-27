<x-admin-layout>


        <h2 class="rounded-lg shadowfont-semibold text-xl text-gray-600 ml-10 pb-2 d-none d-lg-block">Product List</h2>
        <div class="overflow-x-auto ml-10 mr-10 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 text-center ">
                <thead class="bg-gray-50 " >
                <tr class="bg-green-500 text-white ">
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Sell Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs text-gray-1000 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($product as $Product)
                    <tr class="text-center">
                        <td>{{ $Product->id }}</td>
                        <td>{{ $Product->name }}</td>
                         <td>{{ $Product->description }}</td>
                        <td>{{ $Product->qty }}</td>
                        <td>{{ $Product->selling_price }}</td>
                        <td><img src="{{ asset('uploads/product/'.$Product->image) }}" alt="image here" class="w-20 h-20 mx-auto  mt-2 mb-2"></td>
                        <td class="py-4 pl-4 pr-3 text-sm font-medium">
                            <div class="flex gap-3">
                                <a href="{{ url('editproduct/' . $Product->id) }}"
                                    class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Edit</a>
                                <form action="{{ url('deleteproduct/' . $Product->id) }}" method="POST">
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
    </x-admin-layout>

