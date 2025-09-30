<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="text-center max-w-4xl space-y-6 pt-10 bg-gray-900 p-8 rounded-xl border border-purple-900/50 shadow-2xl">
        <h2 class="font-bold text-4xl text-purple-300 mb-2">{{ $job['title'] }}</h2>
        
        <p class="text-2xl font-semibold text-white mb-6">
            {{ $job['salary'] }}
        </p>

        <p class="text-lg text-gray-400">
            This is the full job description for the **{{ $job['title'] }}** role. You will be responsible for defining the system architecture and ensuring optimal performance across cosmic platforms. Apply now to shape the future of interstellar travel.
        </p>
        
        <a href="#" class="inline-block mt-8 px-10 py-3 text-lg font-bold text-white bg-purple-600 rounded-full shadow-lg transition duration-300 hover:bg-purple-700 transform hover:scale-105">
            Apply Now
        </a>

        <p class="mt-8">
            <a href="/jobs" class="text-purple-400 hover:text-purple-200 transition duration-300 underline">
                &larr; Back to All Job Listings
            </a>
        </p>
    </div>
</x-layout>