<x-layout>
    <x-slot:heading>
        Available Job Listings
    </x-slot:heading>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-10 w-full max-w-7xl">

        @foreach ($jobs as $job)
            <div class="p-6 rounded-xl bg-gray-900 border border-purple-900/50 hover:border-purple-500/80 transition duration-300 transform hover:scale-[1.02] shadow-xl">
                <a href="/jobs/{{ $job['id'] }}" class="block">
                    <p class="text-sm font-bold text-purple-600 mb-3">{{ $job->employer->name }}</p>

                    <h2 class="text-xl font-bold text-purple-300 mb-2 hover:text-purple-100 transition duration-300">
                        {{ $job['title'] }}
                    </h2>
                    
                    <p class="text-sm text-gray-400 mb-4">
                        <span class="font-semibold text-white">{{ $job['salary'] }}</span> / Year
                    </p>
                    
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-xs bg-deep-violet/70 text-purple-300 px-3 py-1 rounded-full font-medium">Full-Time</span>
                        <span class="text-sm text-gray-500">View Details &rarr;</span>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</x-layout>