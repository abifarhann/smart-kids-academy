<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Smartkids Academy
    </title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/web-logo-2.png') }}">
    <link href="{{ asset('tailadmin/build/style.css') }}" rel="stylesheet">
    <!-- Tambahkan di <head> atau sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        /* TailAdmin Override CSS - Prioritas Tinggi */

        /* Menu Item Base Styles dengan !important untuk override TailAdmin */
        .menu-item {
            position: relative !important;
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
            border-radius: 0.75rem !important;
            padding: 0.5rem 1rem !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out !important;
        }

        .menu-item-active {
            background-color: #ebf3ff !important;
            color: #465fff !important;
        }

        .dark .menu-item-active {
            background-color: rgba(70, 95, 255, 0.1) !important;
            color: #465fff !important;
        }

        .menu-item-inactive {
            color: #374151 !important;
        }

        .menu-item-inactive:hover {
            background-color: #f3f4f6 !important;
            color: #111827 !important;
        }

        .dark .menu-item-inactive {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .dark .menu-item-inactive:hover {
            background-color: transparent !important;
            color: #465fff !important;
        }

        /* Override TailAdmin untuk Child Dropdown - Lebih Spesifik */
        .menu-dropdown li a {
            display: block !important;
            padding: 0.5rem 1rem !important;
            border-radius: 0.75rem !important;
            font-size: 0.875rem !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out !important;
            color: #374151 !important;
        }

        .menu-dropdown li a:hover {
            background-color: #f3f4f6 !important;
            color: #111827 !important;
        }

        /* Child dropdown item active - Override TailAdmin dengan prioritas tertinggi */
        .menu-dropdown li a[class*="bg-[#ebf3ff]"] {
            background-color: #ebf3ff !important;
            color: #465fff !important;
            font-weight: 600 !important;
        }

        .dark .menu-dropdown li a[class*="bg-[#ebf3ff]"] {
            background-color: rgba(70, 95, 255, 0.1) !important;
            color: #465fff !important;
            font-weight: 600 !important;
        }

        /* Alternatif selector untuk child active */
        .menu-dropdown li a.bg-blue-50,
        .menu-dropdown li a[style*="background"],
        ul.menu-dropdown li a[class*="text-blue"] {
            background-color: #ebf3ff !important;
            color: #465fff !important;
            font-weight: 600 !important;
        }

        /* Icon styles dengan !important */
        .menu-item-icon-active {
            fill: #465fff !important;
        }

        .dark .menu-item-icon-active {
            fill: #465fff !important;
        }

        .menu-item-icon-inactive {
            fill: #374151 !important;
        }

        .menu-item-icon-inactive:hover {
            fill: #111827 !important;
        }

        .dark .menu-item-icon-inactive {
            fill: rgba(255, 255, 255, 0.7) !important;
        }

        .dark .menu-item-icon-inactive:hover {
            fill: #ffffff !important;
        }

        /* Dropdown Arrow dengan !important - STANDARD POSITIONING */
        .menu-item-arrow {
            position: absolute !important;
            right: 10px !important;
            top: 50% !important;
            margin-top: 1.5px !important;
            /* Half of arrow height for center */
            transition: all 0.3s ease-in-out !important;
        }

        .menu-item-arrow-active {
            stroke: #465fff !important;
        }

        .dark .menu-item-arrow-active {
            stroke: #465fff !important;
        }

        .menu-item-arrow-inactive {
            stroke: #374151 !important;
        }

        .menu-item-arrow-inactive:hover {
            stroke: #111827 !important;
        }

        .dark .menu-item-arrow-inactive {
            stroke: rgba(255, 255, 255, 0.7) !important;
        }

        .dark .menu-item-arrow-inactive:hover {
            stroke: #ffffff !important;
        }

        /* Tambahan CSS untuk memastikan TailAdmin tidak override */
        nav ul li a.group.relative.flex.items-center {
            transition: all 0.3s ease-in-out !important;
        }

        /* Override khusus untuk class yang ada di HTML */
        nav ul li a[class*="bg-[#ebf3ff]"] {
            background-color: #ebf3ff !important;
            color: #465fff !important;
        }

        nav ul li a[class*="text-blue-600"] {
            color: #465fff !important;
        }

        /* CSS Spesifik untuk mengatasi conflict TailAdmin pada dropdown */
        .sidebar nav ul.menu-dropdown li a {
            background-color: transparent !important;
            color: #374151 !important;
        }

        .sidebar nav ul.menu-dropdown li a:hover {
            background-color: #f3f4f6 !important;
            color: #111827 !important;
        }

        .sidebar nav ul.menu-dropdown li a[class*="bg-[#ebf3ff]"],
        .sidebar nav ul.menu-dropdown li a[class*="text-blue-600"] {
            background-color: #ebf3ff !important;
            color: #465fff !important;
            font-weight: 600 !important;
        }
    </style>
</head>

<body x-data="{ page: 'ecommerce', 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark bg-gray-900': darkMode === true }">
    <!-- ===== Preloader End ===== -->
    <x-loaded />

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">

        <!-- ===== Sidebar Start ===== -->
        @if (!isset($noSidebar))
            <!-- ===== Sidebar Start ===== -->
            <x-sidebar />
            <!-- ===== Sidebar End ===== -->
        @endif
        <!-- ===== Sidebar End ===== -->


        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- Small Device Overlay Start -->
            <div @click="sidebarToggle = false" :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
                class="fixed w-full h-screen z-9 bg-gray-900/50"></div>
            <!-- Small Device Overlay End -->

            <!-- ===== Header Start ===== -->
            @if (!isset($noHeader))
                <x-header />
            @endif
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main>
                <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
                    @yield('content')
                </div>
            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    <script defer src="{{ asset('tailadmin/build/bundle.js') }}"></script>
</body>
<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('success') }}',
            confirmButtonColor: '#22c55e'
        });
    @endif

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '{{ session('error') }}',
            confirmButtonColor: '#ef4444'
        });
    @endif

    @if (session('warning'))
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan',
            text: '{{ session('warning') }}',
            confirmButtonColor: '#facc15'
        });
    @endif

    function confirmDelete(type, id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${type}-${id}`).submit();
            }
        });
    }
    ///end
</script>

</html>
