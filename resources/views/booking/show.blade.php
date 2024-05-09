{{-- //create tailwind css table for
show all appoinment --}}
<x-shop-layout>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Booked Date
                            </th>
                             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Your appointment data here -->
                        @foreach($bookings as $booking)
                        @if($booking->user_id == auth()->id())

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->time}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->date}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->email}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->created_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$booking->phone}}</td>

                            <td class="py-4 pl-4 pr-3 text-sm font-medium">
                                <div class="flex gap-3">
                                    <a href="{{ url('editbooks/' . $booking->id) }}"
                                        class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Edit</a>
                                    <form action="{{ url('deleteapprov/' . $booking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="rounded-md bg-red-500 px-4 py-2 text-sm font-semibold text-white hover:bg-red-600 transition-all duration-300">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-shop-layout>
