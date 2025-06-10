{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .main {
            flex: 1;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 1rem;
        }
        .content {
            flex: 1;
            padding: 2rem;
        }
    </style>
</head>
<body>

    {{-- Header / Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">Aplikasi Saya</a>
    </nav>

    {{-- Main Content --}}
    <div class="main">
        {{-- Sidebar --}}
        <div class="sidebar">
            <h5>Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Profil</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pengaturan</a></li>
            </ul>
        </div>

        {{-- Content --}}
        <div class="content">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} Aplikasi Saya. Semua hak dilindungi.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
