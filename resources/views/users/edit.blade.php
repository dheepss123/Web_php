<x-app-layout title="Edit User">
    <x-slot name="heading">Edit User: {{ $user->name }}</x-slot>
    <div class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
        <div class="relative mt-12 w-full max-w-lg sm:mt-10">
            <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-500 to-transparent"></div>
            <div class="mx-5 py-8 px-6 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-lg shadow-slate-500/20 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-md lg:rounded-xl lg:shadow-none bg-gradient-to-br from-gray-800 to-gray-900">
                <div class="flex flex-col">
                    <h3 class="text-2xl font-bold leading-6 tracking-tighter text-sky-400 mb-4">Detail Pengguna</h3>
                    <form method="POST" action="/user/{{ $user -> id }}" novalidate  class="space-y-4">
                        @csrf
                        @method('put')
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-400">Nama</label>
                            <input type="text" value="{{ old('name',$user->name) }}" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-500 focus:bg-gray-600 focus:ring-0 text-white" id="name" name="name" required>
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                            <input type="email" value="{{ old('email',$user->email) }}" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-500 focus:bg-gray-600 focus:ring-0 text-white" id="email" name="email" required>
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                            <input type="password" class="mt-1 block w-full rounded-md bg-gray-700 border-transparent focus:border-gray-500 focus:bg-gray-600 focus:ring-0 text-white" id="password" name="password" required>
                            @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
