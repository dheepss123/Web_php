<x-app-layout title="Dheepss - Empowering Growth">
    <x-slot name="heading">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Empowering Growth with Dheepss</h1>
            <p class="mt-2 text-lg text-gray-600">Unlock Your Potential, Transform Your Business</p>
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
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Personal Growth</h2>
                            <p class="mt-2 text-sm text-gray-600">Discover your true potential and achieve personal growth.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Business Transformation</h2>
                            <p class="mt-2 text-sm text-gray-600">Transform your business with innovative strategies and solutions.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg class="h-16 w-16 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h2 class="mt-4 text-lg font-semibold text-gray-900">Community Engagement</h2>
                            <p class="mt-2 text-sm text-gray-600">Join our community of like-minded individuals and organizations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <a href="{{ route('about') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                    <h2 class="text-base font-semibold tracking-wide uppercase">About Dheepss</h2>
                </a>

                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Empowering Individuals and Businesses</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">At Dheepss, we are dedicated to helping individuals and businesses unlock their full potential through personalized growth strategies, innovative solutions, and community engagement.</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center justify-center">
                        <svg class="h-12 w-12 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10l5 5m0 0l5-5m-5 5V3"></path>
                        </svg>
                        <h3 class="mt-2 text-lg font-semibold text-gray-900">Personal Development</h3>
                        <p class="mt-2 text-base text-gray-500">Unlock your potential and achieve personal growth with our tailored programs and resources.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <svg class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="mt-2 text-lg font-semibold text-gray-900">Business Solutions</h3>
                        <p class="mt-2 text-base text-gray-500">Transform your business with our innovative strategies, consulting services, and technology solutions.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <svg class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="mt-2 text-lg font-semibold text-gray-900">Community Engagement</h3>
                        <p class="mt-2 text-base text-gray-500">Join our community of individuals and organizations dedicated to growth and collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
