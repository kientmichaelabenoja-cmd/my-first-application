<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My Dynamic Site' }}</title> 
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configure Tailwind to use the 'Inter' font and define custom dark colors
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        // A deep, rich violet for the light source
                        'deep-violet': '#3A005B',
                        // A very dark, almost black background color
                        'dark-bg': '#0D0518',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom CSS to apply the background */
        .gradient-bg {
            background-color: var(--tw-color-dark-bg);
            background-image: 
                radial-gradient(at 100% 0%, rgba(58, 0, 91, 0.6), transparent 50%),
                linear-gradient(to bottom, #110022, #0D0518);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="min-h-screen gradient-bg text-white font-sans antialiased">

    <div class="flex flex-col min-h-screen relative z-10">
        
        <header class="p-4 md:p-6 sticky top-0 bg-dark-bg/80 backdrop-blur-sm shadow-xl z-20">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                
                <a href="/" class="text-2xl font-extrabold tracking-tight text-purple-400 hover:text-purple-300 transition duration-300 rounded-lg p-2">
                    Cosmic_UI
                </a>
                
                <nav class="flex space-x-4 sm:space-x-8">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </nav>
            </div>
        </header>

        <div class="text-center pt-16 pb-8 bg-dark-bg/50 backdrop-blur-sm">
            <h1 class="text-4xl sm:text-6xl font-extrabold leading-tight tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-purple-500">
                {{ $heading }}
            </h1>
        </div>
        
        <main class="flex-grow flex items-start justify-center p-6 max-w-7xl mx-auto w-full">
            {{ $slot }}
        </main>
        
        <footer class="p-4 text-center text-sm text-gray-500 border-t border-purple-900/50 mt-auto">
            &copy; 2024 Dark Theme Layout. All rights reserved.
        </footer>
    </div>
</body>
</html>