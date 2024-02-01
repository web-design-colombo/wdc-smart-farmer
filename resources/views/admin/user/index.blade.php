<x-admin-layout>
    <div id="users-content" class="content-container">
        <!-- Users content goes here -->
        <div class="left">
            @if (session('success'))
                <div class="alert">
                    <span>{{ session('success') }}</span>
                    <span class="alert-close" onclick="this.parentElement.style.display='none';">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle w-4 h-4">
                            <path
                                d="M10 1a9 9 0 110 18 9 9 0 010-18zm0 2a7 7 0 100 14 7 7 0 000-14zm3.707 4.293a1 1 0 00-1.414-1.414L10 8.586l-2.293-2.293a1 1 0 10-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 101.414 1.414L10 11.414l2.293 2.293a1 1 0 001.414-1.414L11.414 10l2.293-2.293z">
                            </path>
                        </svg>
                    </span>
                </div>
            @endif

            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold leading-6 text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including
                        their name,
                        title, email, and role.</p>
                </div>
                <div class="mt-4 sm:ml-4 sm:flex-none">
                    <a href="{{ route('admin.user.create') }}"
                        class="block rounded-md bg-green-500 px-4 py-2 text-center text-sm font-semibold text-white hover:bg-lime-500">
                        Create User
                    </a>
                </div>
            </div>

            <div class="mt-8">
                <div class="mt-8 overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                        <thead class="bg-green-500 text-white">
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold">ID</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold">Name</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold">Email</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold">Role</th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-100 transition-all duration-300">
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $user->id }}</td>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $user->name }}</td>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">{{ $user->email }}</td>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">
                                        @if ($user->role)
                                            {{ ucwords(str_replace('_', ' ', Str::snake($user->usertype->value))) }}
                                        @else
                                            No Role Assigned xxx
                                        @endif
                                    </td>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">
                                        <div class="flex gap-3">
                                            <a href="{{ route('admin.user.show', $user->id) }}"
                                                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Show</a>
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Edit</a>
                                            <form action="{{ route('admin.user.destroy', $user->id) }}"
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


        </div>
    </div>
</x-admin-layout>
