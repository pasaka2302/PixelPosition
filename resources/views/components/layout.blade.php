<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white px-20">
    <div>
        <nav class="flex justify-between text-center py-6 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}" alt="PixelPositionLogo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Jobs</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Careers</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Salary</a>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Companies</a>
            </div>
            <div>
                <a href="" class="hover:text-blue-600 transition-colors delay-75">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 mb-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>