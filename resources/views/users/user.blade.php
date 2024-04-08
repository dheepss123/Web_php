<x-app-layout title="User">
    <x-slot name="heading">User</x-slot>
    <!-- Tabel -->
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8 mx-auto max-w-7xl">
        <div class="bg-gray-200 px-4 py-3">
            <h3 class="text-lg font-semibold text-gray-800">List of Users</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($user as $users)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $users->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $users->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ (new \Carbon\Carbon($users->created_at))->format("d F Y") }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
