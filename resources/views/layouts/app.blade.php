<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">

    <div class="min-h-screen flex flex-col">
        {{-- Navbar/Header --}}
        <nav class="bg-gray-800 text-white px-6 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="text-lg font-semibold">
                    {{ config('app.name', 'Laravel') }}
                </div>

                {{-- Auth Navigation --}}
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-sm">Halo, {{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-1 rounded">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1 rounded">
                            Login
                        </a>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="flex flex-1">
            {{-- Sidebar --}}
            <aside class="w-64 bg-white shadow-md p-4">
                <h2 class="text-lg font-bold mb-4">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Dashboard</a></li>
                    <li><a href="{{ route('home') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Home</a></li>
                    <li><a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Pengaturan</a></li>
                </ul>
            </aside>

            {{-- Main Content --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>

        {{-- Footer --}}
        <footer class="bg-gray-800 text-white text-center py-3">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Semua hak dilindungi.
        </footer>
    </div>

</body>
</html>
