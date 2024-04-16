<x-app-layout title="Detail Pengguna">
    <x-slot name="heading">Show User: {{ $user->name }}</x-slot>
    <div class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
        <div class="relative mt-12 w-full max-w-lg sm:mt-10">
            <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"></div>
            <div class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
                <div class="flex flex-col p-6">
                    <h3 class="text-xl font-semibold leading-6 tracking-tighter">Detail Pengguna</h3>
                    <div class="mt-4">
                        <div class="text-sm font-medium text-white/50">Nama:</div>
                        <div class="text-lg text-white">{{ $user->name }}</div>
                    </div>
                    <div class="mt-4">
                        <div class="text-sm font-medium text-white/50">Email:</div>
                        <div class="text-lg text-white">{{ $user->email }}</div>
                    </div>
                    <div class="mt-4">
                        <div class="text-sm font-medium text-white/50">Dibuat Pada:</div>
                        <div class="text-lg text-white">{{ $user->created_at->format("d F Y") }}</div>
                    </div>
                    <div class="mt-4">
                        <div class="text-sm font-medium text-white/50">Diupdate Pada:</div>
                        <div class="text-lg text-white">{{ $user->updated_at->format("d F Y") }}</div>
                    </div>

                    <div class="mt-6 flex justify-end gap-4">
                        <a href="{{ route("user.HalamanEditUser", ['user' => $user->id])}}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Edit</a>

                        <form method="POST" action="{{ route('user.DeleteUser', $user->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
