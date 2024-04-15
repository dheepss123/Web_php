<x-app-layout title="About Dheepss">
    <x-slot name="heading">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">About Dheepss</h1>
            <p class="mt-2 text-lg text-gray-600">Empowering Growth, Inspiring Success</p>
        </div>
    </x-slot>

    <div class="py-6 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg class="h-16 w-16 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10l5 5m0 0l5-5m-5 5V3"></path>
                            </svg>
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Our Mission</h2>
                            <p class="mt-2 text-sm text-gray-600">To empower individuals and businesses to reach their full potential through innovative solutions and community engagement.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Our Values</h2>
                            <p class="mt-2 text-sm text-gray-600">We are committed to integrity, excellence, collaboration, and continuous improvement in all that we do.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg class="h-16 w-16 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Our Vision</h2>
                            <p class="mt-2 text-sm text-gray-600">To be a catalyst for positive change and growth in individuals and organizations worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Meet Our Team</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Passionate and Dedicated Professionals</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Our team consists of highly skilled individuals with diverse backgrounds and expertise, united by a shared commitment to excellence and innovation.</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Team members -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                        <img class="rounded-full h-24 w-24" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member">
                        <div class="mt-4 text-center">
                            <p class="text-lg font-semibold">John Doe</p>
                            <p class="mt-2 text-sm text-gray-600">Co-founder & CEO</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                        <img class="rounded-full h-24 w-24" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member">
                        <div class="mt-4 text-center">
                            <p class="text-lg font-semibold">Devin</p>
                            <p class="mt-2 text-sm text-gray-600">Manager</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-lg p-6">
                        <img class="rounded-full h-24 w-24" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member">
                        <div class="mt-4 text-center">
                            <p class="text-lg font-semibold">Jordan</p>
                            <p class="mt-2 text-sm text-gray-600">executive</p>
                        </div>
                    </div>
                    <!-- Repeat for other team members -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
