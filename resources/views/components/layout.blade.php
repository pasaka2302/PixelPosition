<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-black text-white px-4 sm:px-6 md:px-10 lg:px-20">
    <div>
        {{-- <nav class="flex justify-between text-center py-6 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                        alt="PixelPositionLogo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Jobs</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Careers</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Salary</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Companies</a>
            </div>

            @auth
                <div class="flex space-x-6">
                    <a href="/jobs/create" class="hover:text-blue-600 transition-colors delay-75">Post a Job</a>

                    <form action="/logout" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6">
                    <a href="/register" class="hover:text-blue-600 transition-colors delay-75">Register</a>
                    <a href="/login" class="hover:text-blue-600 transition-colors delay-75">Login</a>
                </div>
            @endguest
        </nav> --}}
        <nav x-data="{ open: false }" class="border-b border-white/10 px-4 py-6">
            <div class="flex items-center justify-between md:justify-normal md:space-x-10">
                {{-- Logo --}}
                <div class="flex-shrink-0">
                    <a href="/">
                        <img src="{{ Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                            alt="PixelPositionLogo" class="h-8">
                    </a>
                </div>

                {{-- Desktop Center Nav --}}
                <div class="hidden md:flex flex-1 justify-center space-x-6 font-bold">
                    <a href="#" class="hover:text-blue-600 transition">Jobs</a>
                    <a href="#" class="hover:text-blue-600 transition">Careers</a>
                    <a href="#" class="hover:text-blue-600 transition">Salary</a>
                    <a href="#" class="hover:text-blue-600 transition">Companies</a>
                </div>

                {{-- Desktop Right Auth Buttons --}}
                <div class="hidden md:flex justify-end items-center space-x-6 font-bold">
                    @auth
                        <a href="/jobs/create" class="hover:text-blue-600 transition">Post a Job</a>
                        <form action="/logout" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="hover:text-blue-600 transition">Log Out</button>
                        </form>
                    @endauth

                    @guest
                        <a href="/register" class="hover:text-blue-600 transition">Register</a>
                        <a href="/login" class="hover:text-blue-600 transition">Login</a>
                    @endguest
                </div>

                {{-- Hamburger (Mobile Only) --}}
                <div class="md:hidden">
                    <button @click="open = !open" class="text-white focus:outline-none">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Nav --}}
            <div x-show="open" x-transition class="mt-4 space-y-4 flex flex-col md:hidden font-bold">
                <a href="#" class="hover:text-blue-600 transition">Jobs</a>
                <a href="#" class="hover:text-blue-600 transition">Careers</a>
                <a href="#" class="hover:text-blue-600 transition">Salary</a>
                <a href="#" class="hover:text-blue-600 transition">Companies</a>

                <span class="border-b border-white/10"></span>

                @auth
                    <a href="/jobs/create" class="hover:text-blue-600 transition">Post a Job</a>
                    <form action="/logout" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="hover:text-blue-600 transition">Log Out</button>
                    </form>
                @endauth

                @guest
                    <a href="/register" class="hover:text-blue-600 transition">Register</a>
                    <a href="/login" class="hover:text-blue-600 transition">Login</a>
                @endguest
            </div>
        </nav>
        <main class="mt-10 mb-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
