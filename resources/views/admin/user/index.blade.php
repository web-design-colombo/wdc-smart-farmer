<x-admin-layout>
    <div id="users-content" class="content-container bg-green-50 p-6 rounded-md">
        <!-- Users content goes here -->
        <div class="left">
            @if (session('success'))
                <div class="alert bg-green-100 border-l-4 border-green-500 text-green-900 p-4 mb-4">
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

            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-3xl font-semibold leading-6 text-green-900">Users</h1>
                    <p class="mt-2 text-sm text-green-700">A list of all the users in your account including
                        their name, title, email, and role.</p>
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
                                            {{-- {{ ucwords(str_replace('_', ' ', Str::snake($user->role->value))) }} --}}
                                        @else
                                            No Role Assigned
                                        @endif
                                    </td>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium">
                                        <div class="flex gap-3">
                                            <a href="{{ route('admin.user.show', $user->id) }}"
                                                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Show</a>
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white hover:bg-green-600 transition-all duration-300">Edit</a>

                                            <!-- Delete Button with Modal Trigger -->
                                            <button type="button"
                                                class="rounded-md bg-red-500 px-4 py-2 text-sm font-semibold text-white hover:bg-red-600 transition-all duration-300"
                                                onclick="openDeleteModal('{{ $user->id }}')">Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Delete Confirmation Modal -->
                                <div id="delete-modal-{{ $user->id }}"
                                    class="fixed inset-0 z-10 hidden overflow-y-auto">
                                    <div
                                        class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>

                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>

                                        <!-- Modal Content -->
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div
                                                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                        <!-- Heroicon name: outline/exclamation -->
                                                        <svg class="h-6 w-6 text-red-600" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 9v2m0 4h0m-12 2h24a2 2 0 01-2 2H2a2 2 0 01-2-2zM12 4L2 20h20L12 4z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Delete User
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm text-gray-500">
                                                                Are you sure you want to delete this user? This action
                                                                cannot be undone.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <form id="delete-form-{{ $user->id }}"
                                                    action="{{ route('admin.user.destroy', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="w-full inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Delete
                                                    </button>
                                                </form>
                                                <button type="button"
                                                    onclick="closeDeleteModal('{{ $user->id }}')"
                                                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script>
         function openDeleteModal(userId) {
            document.getElementById('delete-modal-' + userId).classList.remove('hidden');
        }

        function closeDeleteModal(userId) {
            document.getElementById('delete-modal-' + userId).classList.add('hidden');
        }
    </script>
</x-admin-layout>
