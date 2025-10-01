<x-layout>
    <x-slot:heading>
        Your Next Space Career Awaits
    </x-slot:heading>

    <div class="text-center max-w-4xl space-y-8 pt-10">
        <p class="text-xl sm:text-2xl text-gray-300 max-w-3xl mx-auto">
            Discover thousands of high-paying jobs in technology, space exploration, and remote work across the globe. Start your search above!
        </p>
        
        <div class="pt-4">
            <a href="/jobs" class="inline-block px-10 py-3 text-lg font-semibold text-white bg-purple-600 rounded-full shadow-lg transition duration-300 hover:bg-purple-700 hover:shadow-xl transform hover:scale-105">
                Browse All {{ \App\Models\Job::count() }} Listings
            </a>
        </div>
    </div>
</x-layout>