<x-admin-layout>


        <h2 class="font-semibold text-xl text-gray-600 ml-10 pb-2">Product List</h2>
        <div class="overflow-x-auto ml-10 mr-10">
            <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                <tr class="text-center font-bold">
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
                        <td class="px-2 py-1 whitespace-nowrap">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" title="Edit">
                                Edit
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline ml-2" title="Delete">
                                Delete
                            </button>
                        </td>
                    </tr>


                @endforeach



                </tbody>
            </table>
        </div>
    </x-admin-layout>

