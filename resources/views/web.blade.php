@extends('layouts.website')

{{-- @php($noSidebar = true)
@php($noHeader = true) --}}
@section('content')
    <header style="background-color:  #0047A0; min-height: 100vh; position: relative;" class="text-white">
        <nav class="navbar" id="mainNavbar" class="block sm:hidden"
            style="display: flex; justify-content: space-between; align-items: center; padding: 16px; color: white;">
            <div style="flex-shrink: 0;"> <img src="/images/logo/3-removebg.png" alt="logo"
                    style="width: 50px; height: 50px;" />
            </div>

            <div class="block lg:hidden">
                <button id="menuToggle" class="hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <div class="hidden lg:flex" style="flex: 1; justify-content: center; align-items: center;">
                <div style="display: flex; gap: 16px;">
                    <a href="#program" style="text-decoration: none; color: inherit; font-size: 16px;">Program Belajar</a>
                    <a href="#diskon" style="text-decoration: none; color: inherit; font-size: 16px;">Diskon</a>
                    <a href="#testimoni" style="text-decoration: none; color: inherit; font-size: 16px;">Testimoni</a>
                    <a href="#faq" style="text-decoration: none; color: inherit; font-size: 16px;">FAQ</a>
                </div>
            </div>

            {{-- Paling kanan --}}
            <div class="hidden lg:flex" style="flex-shrink: 0; margin-left: 32px;">
                @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('statistik') }}" style="text-decoration: none; color: inherit; font-size: 16px;">
                            Dashboard
                        </a>
                    @elseif (Auth::user()->role === 'wali_murid')
                        <a href="{{ route('penilaian-bulanan-siswa') }}"
                            style="text-decoration: none; color: inherit; font-size: 16px;">
                            Dashboard
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" style="text-decoration: none; color: inherit; font-size: 16px;">
                        Login
                    </a>
                @endif
            </div>

        </nav>


        <!-- Mobile menu overlay -->
        <div id="menuOverlay" class="menu-overlay"></div>

        <!-- Mobile menu -->
        <div id="mobileMenu" class="mobile-menu lg:hidden">
            <a href="#program">Produk Belajar</a>
            <a href="#diskon">Diskon</a>
            <a href="#testimoni">Testimoni</a>
            <a href="#faq">FAQ</a>
            @if (Auth::check())
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('statistik') }}" style="text-decoration: none; color: inherit; font-size: 16px;">
                        Dashboard
                    </a>
                @elseif (Auth::user()->role === 'wali_murid')
                    <a href="{{ route('penilaian-bulanan-siswa') }}"
                        style="text-decoration: none; color: inherit; font-size: 16px;">
                        Dashboard
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" style="text-decoration: none; color: inherit; font-size: 16px;">
                    Login
                </a>
            @endif
        </div>

        <div class="flex flex-col justify-center items-center"
            style="padding-top: 150px; max-width: 1200px; margin-left: auto; margin-right: auto;">

            <img class="img-bg" src="/images/website/union.png" alt="background-illustration"
                style="width: 100vw; position: absolute; top: 0; bottom: 0; left: 0;">

            <div style="margin-top: 30px; margin-bottom: 30px;" class="flex flex-col justify-center items-center">
                <h1 class="hero-title" style="font-size: 5rem; font-weight: 600">Smart Kids Academy</h1>
                <h3 class="hero-subtitle" style="font-size: 2rem; font-weight: 300">Excellence Begins at Home</h3>
            </div>

            <a href="https://wa.me/6282338109400" target="_blank"
                style="background-color: white; 
                        color: #0047A0; 
                        padding: 10px 20px; 
                        border-radius: 20px; 
                        text-decoration: none; 
                        font-size: 16px;
                        transition: background-color 0.3s ease;
                        position: relative;
                        z-index: 10;">
                Hubungi Kami
            </a>
        </div>

        <img src="/images/website/background-illustration.svg" alt="background-illustration"
            style="width: 100vw; position: absolute; top: 20; bottom: 0; left: 0;">
    </header>

    {{-- about --}}
    <section id="about" class="bg-white flex flex-col gap-8 justify-center text-center">
        <h1 style="font-size: 2.5rem; font-weight: 600; color:#333333">Tentang Kami</h1>
        <p class="font-regular"
            style="max-width: 1000px; width: 100%; margin: 0 auto; font-size: 20px; line-height: 1.8; text-align: justify">
            Smart Kids Academy adalah bimbingan belajar yang hadir sebagai solusi pendidikan di rumah untuk jenjang TK
            hingga SMP. Berdiri sejak 2017, SKA berkomitmen membangun kebiasaan belajar yang menyenangkan dan terstruktur,
            tanpa harus jauh-jauh datang ke tempat les. <br />

            Kami memiliki lebih dari 20 tentor profesional, lulusan terbaik, dan berpengalaman di bidang pendidikan anak.
            Pola ajar kami mengutamakan pendekatan personal—disesuaikan dengan karakter dan kebutuhan setiap siswa.
            <br />

            Setiap program kami dirancang untuk mendukung pencapaian akademik, membangun disiplin belajar, serta menumbuhkan
            rasa percaya diri anak dalam memahami materi sekolah.
        </p>

        <div class="flex items-center gap-2 grow order-2 xl:order-3 justify-center xl:justify-center">
            {{-- wa --}}
            <a href="https://wa.me/6282338109400" target="_blank"
                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.54488 11.7254L8.80112 10.056C8.94007 9.98476 9.071 9.89524 9.16639 9.77162C9.57731 9.23912 9.66722 8.51628 9.38366 7.89244L7.76239 4.32564C7.23243 3.15974 5.7011 2.88206 4.79552 3.78764L3.72733 4.85577C3.36125 5.22182 3.18191 5.73847 3.27376 6.24794C3.9012 9.72846 5.56003 13.0595 8.25026 15.7497C10.9405 18.44 14.2716 20.0988 17.7521 20.7262C18.2615 20.8181 18.7782 20.6388 19.1442 20.2727L20.2124 19.2045C21.118 18.2989 20.8403 16.7676 19.6744 16.2377L16.1076 14.6164C15.4838 14.3328 14.7609 14.4227 14.2284 14.8336C14.1048 14.929 14.0153 15.06 13.944 15.1989L12.2747 18.4552"
                        stroke="" stroke-width="1.5"></path>
                </svg>
            </a>

            {{-- ig --}}
            <a href="https://www.instagram.com/smartkidsacademy__/" target="_blank"
                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.8567 1.66699C11.7946 1.66854 12.2698 1.67351 12.6805 1.68573L12.8422 1.69102C13.0291 1.69766 13.2134 1.70599 13.4357 1.71641C14.3224 1.75738 14.9273 1.89766 15.4586 2.10391C16.0078 2.31572 16.4717 2.60183 16.9349 3.06503C17.3974 3.52822 17.6836 3.99349 17.8961 4.54141C18.1016 5.07197 18.2419 5.67753 18.2836 6.56433C18.2935 6.78655 18.3015 6.97088 18.3081 7.15775L18.3133 7.31949C18.3255 7.73011 18.3311 8.20543 18.3328 9.1433L18.3335 9.76463C18.3336 9.84055 18.3336 9.91888 18.3336 9.99972L18.3335 10.2348L18.333 10.8562C18.3314 11.794 18.3265 12.2694 18.3142 12.68L18.3089 12.8417C18.3023 13.0286 18.294 13.213 18.2836 13.4351C18.2426 14.322 18.1016 14.9268 17.8961 15.458C17.6842 16.0074 17.3974 16.4713 16.9349 16.9345C16.4717 17.397 16.0057 17.6831 15.4586 17.8955C14.9273 18.1011 14.3224 18.2414 13.4357 18.2831C13.2134 18.293 13.0291 18.3011 12.8422 18.3076L12.6805 18.3128C12.2698 18.3251 11.7946 18.3306 10.8567 18.3324L10.2353 18.333C10.1594 18.333 10.0811 18.333 10.0002 18.333H9.76516L9.14375 18.3325C8.20591 18.331 7.7306 18.326 7.31997 18.3137L7.15824 18.3085C6.97136 18.3018 6.78703 18.2935 6.56481 18.2831C5.67801 18.2421 5.07384 18.1011 4.5419 17.8955C3.99328 17.6838 3.5287 17.397 3.06551 16.9345C2.60231 16.4713 2.3169 16.0053 2.1044 15.458C1.89815 14.9268 1.75856 14.322 1.7169 13.4351C1.707 13.213 1.69892 13.0286 1.69238 12.8417L1.68714 12.68C1.67495 12.2694 1.66939 11.794 1.66759 10.8562L1.66748 9.1433C1.66903 8.20543 1.67399 7.73011 1.68621 7.31949L1.69151 7.15775C1.69815 6.97088 1.70648 6.78655 1.7169 6.56433C1.75786 5.67683 1.89815 5.07266 2.1044 4.54141C2.3162 3.9928 2.60231 3.52822 3.06551 3.06503C3.5287 2.60183 3.99398 2.31641 4.5419 2.10391C5.07315 1.89766 5.67731 1.75808 6.56481 1.71641C6.78703 1.70652 6.97136 1.69844 7.15824 1.6919L7.31997 1.68666C7.7306 1.67446 8.20591 1.6689 9.14375 1.6671L10.8567 1.66699ZM10.0002 5.83308C7.69781 5.83308 5.83356 7.69935 5.83356 9.99972C5.83356 12.3021 7.69984 14.1664 10.0002 14.1664C12.3027 14.1664 14.1669 12.3001 14.1669 9.99972C14.1669 7.69732 12.3006 5.83308 10.0002 5.83308ZM10.0002 7.49974C11.381 7.49974 12.5002 8.61863 12.5002 9.99972C12.5002 11.3805 11.3813 12.4997 10.0002 12.4997C8.6195 12.4997 7.50023 11.3809 7.50023 9.99972C7.50023 8.61897 8.61908 7.49974 10.0002 7.49974ZM14.3752 4.58308C13.8008 4.58308 13.3336 5.04967 13.3336 5.62403C13.3336 6.19841 13.8002 6.66572 14.3752 6.66572C14.9496 6.66572 15.4169 6.19913 15.4169 5.62403C15.4169 5.04967 14.9488 4.58236 14.3752 4.58308Z"
                        fill=""></path>
                </svg>
            </a>
        </div>
    </section>

    {{-- program bimbel section --}}
    <section id="program"
        style="background-color: #0047A0; min-height: 100vh; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 32px; margin-bottom: 32px; gap: 32px;">

        <h1 style="font-size: 2.5rem; font-weight: 600; color: white">Program Unggulan Kami!</h1>
        <p class="font-regular text-white"
            style="max-width: 1000px; width: 100%; margin: 0 auto; font-size: 20px; line-height: 1.8;">
            Smart Kids Academy menyediakan berbagai program belajar yang dirancang untuk mendukung perkembangan akademik
            anak mulai dari TK hingga SMP, dengan metode belajar yang menyenangkan dan personal.
        </p>

        <div class="flex flex-col items-center gap-8">
            <!--  gambar sejajar -->
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white rounded-xl p-4" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/website/community-brosur.svg') }}" alt="brosur"
                        class="max-w-xs h-auto rounded-lg">
                </div>
                <div class="bg-white rounded-xl p-4" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/website/private-brosur.svg') }}" alt="brosur"
                        class="max-w-xs h-auto rounded-lg">
                </div>
                <div class="bg-white rounded-xl p-4" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/website/umum-brosur.svg') }}" alt="brosur"
                        class="max-w-xs h-auto rounded-lg">
                </div>
            </div>
        </div>
    </section>

    {{-- diskon section --}}
    <section id="diskon" class="container mx-auto px-4 py-16 md:py-24" style="background-color: white;">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <span class="inline-block"
                    style="background-color: #d5e3ff; color: #0049af; font-size: 1.5rem; font-weight: 600; padding: 0.25rem 0.75rem; border-radius: 9999px; margin-bottom: 1rem;">Diskon
                    Belajar 2025–2026</span>
                <h2 class=" md:text-5xl font-extrabold text-[#333333] leading-tight mb-6" style="font-size: 16px">
                    Diskon Referral (Periode 2025–2026) untuk Koordinator/Orang Tua
                </h2>
                <p class="text-lg text-[#666666] mb-8 max-w-lg">
                    - 10% untuk Community Class <br />
                    - 20% untuk Group Class<br />
                    Berlaku untuk setiap siswa baru yang mendaftar melalui Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="rounded-xl p-6 md:p-8 shadow-md flex flex-col justify-between h-56"
                    style="background-color: #0047A0; color: white;">
                    <div class="mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 13H5a2 2 0 00-2 2v2a2 2 0 002 2h4m5-6v6m3-3h-3.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Strategy Development</h3>
                    <p class="text-sm opacity-90">Crafting strategic plans that align with your goals.</p>
                </div>

                <div class="rounded-xl p-6 md:p-8 shadow-md flex flex-col justify-between h-56"
                    style="background-color: #F8F9FA;">
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-[#0047A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c1.657 0 3 .895 3 2s-1.343 2-3 2-3-.895-3-2 1.343-2 3-2zM9 17a3 3 0 00-3 3v1h12v-1a3 3 0 00-3-3H9z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#333333] mb-2">Risk Management</h3>
                    <p class="text-sm text-[#666666]">Identify, assess, and mitigate risks to protect your assets.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- fasilitas --}}
    <section class="section-container">
        <div class="section-header">
            <h1 style="font-size: 2.5rem; font-weight: 600; color:#333333">Fasilitas</h1>
            <p class="font-regular"
                style="max-width: 1000px; width: 100%; margin: 0 auto; font-size: 20px; line-height: 1.8; color: #333333;">
                Segera bergabung

                dan dapatkan seluruh fasilitas Smart Kids Academy</p>
        </div>

        <div class="responsive-grid-container">
            <div class="card-item">
                <div class="icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 2v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="card-title">Raport Digital</h3>
                <p class="card-description">Orang tua bisa pantau perkembangan belajar anak kapan saja.</p>
            </div>

            <div class="card-item">
                <div class="icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                        </path>
                    </svg>
                </div>
                <h3 class="card-title">Laporan Harian dan Bulanan</h3>
                <p class="card-description">Setiap sesi belajar ada catatan dari tentor.</p>
            </div>

            <div class="card-item">
                <div class="icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h-5m-2 2h4M9 13h6m3 0H6m-4 0h16M4 4h16v16H4V4z"></path>
                    </svg>
                </div>
                <h3 class="card-title">Tentor Tetap & Evaluasi Berkala</h3>
                <p class="card-description">Agar anak merasa nyaman dan progresnya terpantau.</p>
            </div>

            <div class="card-item">
                <div class="icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                </div>
                <h3 class="card-title">Program Liburan Edukatif (Smart Holiday Camp)</h3>
                <p class="card-description">Liburan tetap produktif dan menyenangkan!</p>
            </div>

        </div>
    </section>

    {{-- program Ekstrakulikular Section --}}
    <section id="ektra-program" class="container mx-auto px-4 py-8 md:py-24 items-center justify-center"
        style="margin-top: -100px">

        <div class="text-center " style="margin-bottom: 24px">
            <h1 style="font-size: 2.5rem; font-weight: 600; color:#333333">Program Ekstrakulikular Kami Kedepannya</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl border border-gray-300 p-8 flex flex-col relative overflow-hidden">
                <div class="relative z-10 flex-grow">
                    <div class="flex flex-row justify-between mb-4">
                        <h3 class="text-2xl font-bold text-[#2563EB] ">Bahasa Inggris</h3>
                        <p
                            class="bg-warning-50 text-theme-sm text-warning-600 dark:bg-warning-500/15 dark:text-warning-400 rounded-full px-2 py-0.5 font-medium">
                            Segera hadir
                        </p>
                    </div>

                    <p class="text-[#666666] text-base leading-relaxed mb-6 max-w-sm">
                        Meningkatkan kemampuan speaking dan listening secara fun! <br />
                        Kegiatan: <br />
                        - Conversation practice <br />
                        - Games <br />
                        - Mini presentation <br />
                        - Vocabulary challenge.
                    </p>
                </div>

                <div class="absolute bottom-0 right-4 w-72 h-72 md:w-80 md:h-80 -mb-12 -mr-12 z-0 card-illustration-2">
                    <img src="{{ asset('images/website/bing.svg') }}" alt="flowers"
                        style="width: 80px; height: 80px; opacity: 0.6;">
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-300 p-8 flex flex-col relative overflow-hidden">
                <div class="relative z-10 flex-grow">
                    <div class="flex flex-row justify-between mb-4">
                        <h3 class="text-2xl font-bold text-[#2563EB]">Bahasa Arab</h3>
                        <p
                            class="bg-warning-50 text-theme-sm text-warning-600 dark:bg-warning-500/15 dark:text-warning-400 rounded-full px-2 py-0.5 font-medium">
                            Segera hadir
                        </p>
                    </div>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 max-w-sm">
                        Belajar Bahasa Arab dasar untuk memperkaya keterampilan bahasa siswa. <br />
                        Kegiatan: <br />
                        - Pengenalan huruf hijaiyah <br />
                        - Kosakata sehari-hari <br />
                        - Percakapan Sederhana <br />
                    </p>
                </div>

                <div class="absolute bottom-0 right-4 w-72 h-72 md:w-80 md:h-80 -mb-12 -mr-12 z-0 card-illustration-2">
                    <img src="{{ asset('images/website/arab.svg') }}" alt="flowers"
                        style="width: 90px; height: 90px; opacity: 0.6;">
                </div>
            </div>

        </div>
    </section>

    {{-- testimoni --}}
    <section id="testimoni"
        style="margin-top: 50px; padding: 80px 20px; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); position: relative;">
        <div style="max-width: 1200px; margin: 0 auto; position: relative;">
            <!-- Enhanced Header -->
            <div style="text-align: center; margin-bottom: 60px;">
                <h1 style="font-size: 2.5rem; font-weight: 600; color:#333333">Apa Kata Wali Murid?</h1>
                <p style="font-size: 18px; color: #64748b; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                    Dengarkan langsung dari para orang tua yang telah merasakan manfaat belajar bersama Smart Kids Academy.
                </p>
            </div>

            <!-- Testimonial Cards Grid -->
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-bottom: 50px;">

                <!-- Testimonial Card 1 -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 32px rgba(30, 64, 175, 0.1); padding: 32px; transition: all 0.3s ease; border: 1px solid #e2e8f0;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(30, 64, 175, 0.15)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(30, 64, 175, 0.1)';">

                    <!-- Quote Icon -->
                    <div style="margin-bottom: 24px;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: white;" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-10zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Testimonial Content -->
                    <div style="margin-bottom: 24px;">
                        <p
                            style="color: #334155; line-height: 1.7; font-size: 16px; margin-bottom: 20px; font-style: italic;">
                            "Anak saya semangat banget belajarnya. Nilainya juga makin bagus. Terima kasih Smart Kids
                            Academy!"
                        </p>
                    </div>

                    <!-- Rating -->
                    <div style="display: flex; align-items: center; margin-bottom: 20px;">
                        <div style="display: flex; align-items: center; gap: 2px; margin-right: 8px;">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 16px; height: 16px; color: #fbbf24;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <span style="font-size: 14px; color: #64748b; font-weight: 500;">5.0</span>
                    </div>

                    <!-- Profile -->
                    <div
                        style="display: flex; align-items: center; gap: 12px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <span style="color: white; font-weight: 600; font-size: 18px;">D</span>
                        </div>
                        <div>
                            <div style="font-weight: 600; color: #1e293b; font-size: 16px;">Ibu Desi</div>
                            <div style="font-size: 14px; color: #64748b;">Wali murid kelas 3 SD</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 32px rgba(30, 64, 175, 0.1); padding: 32px; transition: all 0.3s ease; border: 1px solid #e2e8f0;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(30, 64, 175, 0.15)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(30, 64, 175, 0.1)';">

                    <!-- Quote Icon -->
                    <div style="margin-bottom: 24px;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: white;" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-10zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Testimonial Content -->
                    <div style="margin-bottom: 24px;">
                        <p
                            style="color: #334155; line-height: 1.7; font-size: 16px; margin-bottom: 20px; font-style: italic;">
                            "Belajarnya fleksibel, tentornya sabar dan perhatian. Cocok buat anak yang susah fokus di
                            kelas."
                        </p>
                    </div>

                    <!-- Rating -->
                    <div style="display: flex; align-items: center; margin-bottom: 20px;">
                        <div style="display: flex; align-items: center; gap: 2px; margin-right: 8px;">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 16px; height: 16px; color: #fbbf24;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <span style="font-size: 14px; color: #64748b; font-weight: 500;">5.0</span>
                    </div>

                    <!-- Profile -->
                    <div
                        style="display: flex; align-items: center; gap: 12px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <span style="color: white; font-weight: 600; font-size: 18px;">R</span>
                        </div>
                        <div>
                            <div style="font-weight: 600; color: #1e293b; font-size: 16px;">Pak Rizal</div>
                            <div style="font-size: 14px; color: #64748b;">Ayah dari siswa SMP</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 32px rgba(30, 64, 175, 0.1); padding: 32px; transition: all 0.3s ease; border: 1px solid #e2e8f0;"
                    onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 48px rgba(30, 64, 175, 0.15)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(30, 64, 175, 0.1)';">

                    <!-- Quote Icon -->
                    <div style="margin-bottom: 24px;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: white;" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-10zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Testimonial Content -->
                    <div style="margin-bottom: 24px;">
                        <p
                            style="color: #334155; line-height: 1.7; font-size: 16px; margin-bottom: 20px; font-style: italic;">
                            "Anak jadi lebih percaya diri dan aktif di sekolah berkat bimbingan tentor Smart Kids Academy."
                        </p>
                    </div>

                    <!-- Rating -->
                    <div style="display: flex; align-items: center; margin-bottom: 20px;">
                        <div style="display: flex; align-items: center; gap: 2px; margin-right: 8px;">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 16px; height: 16px; color: #fbbf24;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <span style="font-size: 14px; color: #64748b; font-weight: 500;">5.0</span>
                    </div>

                    <!-- Profile -->
                    <div
                        style="display: flex; align-items: center; gap: 12px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                        <div
                            style="width: 48px; height: 48px; background: #1e40af; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <span style="color: white; font-weight: 600; font-size: 18px;">A</span>
                        </div>
                        <div>
                            <div style="font-weight: 600; color: #1e293b; font-size: 16px;">Ibu Ani</div>
                            <div style="font-size: 14px; color: #64748b;">Bunda dari siswa TK</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- faq --}}
    <section id="faq"
        style=" max-width: 1280px; margin-left: auto; margin-right: auto; padding-left: 1rem; padding-right: 1rem; padding-top: 4rem; padding-bottom: 4rem;">
        <div class="responsive-grid" style="display: grid; grid-template-columns: 1fr; gap: 3rem;">
            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <h2 style="font-size: 2.5rem; font-weight: 600; color: #333333; line-height: 1.25; margin-bottom: 2rem;">
                    Frequently asked <br> questions
                </h2>

                <div
                    style="background-color: white; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); padding: 1.5rem; margin-top: 3rem;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #333333; margin-bottom: 1rem;">
                        Masih bingung?
                    </h3>
                    <p style="color: #666666; font-size: 1rem; margin-bottom: 1.5rem;">
                        Hubungi kami melalui pesan WhatsApp, kami siap membantu menjawab pertanyaanmu!
                    </p>
                    <a href="https://wa.me/6282338109400" target="_blank"
                        style="background-color: #0047A0; color: white; font-weight: 500; padding: 0.75rem 1.5rem; border-radius: 0.5rem; transition: background-color 0.3s ease;">
                        Kirim Pesan
                    </a>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 3rem;">
                <div
                    style="background-color: white; border-radius: 0.75rem; border: 1px solid #E0E0E0; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); overflow: hidden;">
                    <button
                        style="width: 100%; text-align: left; padding: 1.5rem; display: flex; justify-content: space-between; align-items: center; font-size: 1.125rem; font-weight: 500; color: #333333; border: none; background-color: transparent; cursor: pointer;"
                        onclick="toggleAccordion(this)">
                        Apakah program ini bisa untuk anak yang belum bisa membaca sama sekali?
                        <svg class="accordion-icon"
                            style="width: 1.25rem; height: 1.25rem; color: #6B7280; transition: transform 0.3s ease;"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content"
                        style="padding-left: 1.5rem; padding-right: 1.5rem; padding-bottom: 1.5rem; color: #666666;">
                        <p>Bisa, kami punya program Calistung khusus untuk anak usia dini</p>
                    </div>
                </div>

                <div
                    style="background-color: white; border-radius: 0.75rem; border: 1px solid #E0E0E0; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); overflow: hidden;">
                    <button
                        style="width: 100%; text-align: left; padding: 1.5rem; display: flex; justify-content: space-between; align-items: center; font-size: 1.125rem; font-weight: 500; color: #333333; border: none; background-color: transparent; cursor: pointer;"
                        onclick="toggleAccordion(this)">
                        Tentornya datang ke rumah atau online?
                        <svg class="accordion-icon"
                            style="width: 1.25rem; height: 1.25rem; color: #6B7280; transition: transform 0.3s ease;"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content"
                        style="padding-left: 1.5rem; padding-right: 1.5rem; padding-bottom: 1.5rem; color: #666666;">
                        <p>Tentor datang ke rumah</p>
                    </div>
                </div>

                <div
                    style="background-color: white; border-radius: 0.75rem; border: 1px solid #E0E0E0; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); overflow: hidden;">
                    <button
                        style="width: 100%; text-align: left; padding: 1.5rem; display: flex; justify-content: space-between; align-items: center; font-size: 1.125rem; font-weight: 500; color: #333333; border: none; background-color: transparent; cursor: pointer;"
                        onclick="toggleAccordion(this)">
                        Bagaimana sistem pelaporannya ke orang tua?
                        <svg class="accordion-icon"
                            style="width: 1.25rem; height: 1.25rem; color: #6B7280; transition: transform 0.3s ease;"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content"
                        style="padding-left: 1.5rem; padding-right: 1.5rem; padding-bottom: 1.5rem; color: #666666;">
                        <p>Setiap bulan ada laporan digital. Bisa juga konsultasi langsung dengan tentor</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <footer class=" text-white" style="background-color: #1e1e1e;">
        <div class="max-w-6xl mx-auto px-4 py-12">
            <!-- Main Footer Content -->
            <div class="footer-grid justify-center"
                style="display: grid; grid-template-columns: 1fr; gap: 16px; background-color: #1e1e1e; margin-top: 100px; padding: 30px;">
                <img src="/images/logo/3-removebg.png" alt="logo" style="width: 50px; height: 50px;" />

                <!-- Brand Section -->
                <div class="text-start md:text-left">
                    <h3 class="text-2xl font-bold mb-3">Smart Kids Academy</h3>
                    <p class="text-gray-400 mb-6">Excellence Begins at Home</p>

                    <!-- Social Media Links -->
                    <div class="flex justify-start md:justify-start gap-3">
                        <a href="https://wa.me/6282338109400" target="_blank"
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 text-gray-400 hover:bg-gray-700 hover:text-white hover-lift">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/smartkidsacademy__/" target="_blank"
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800 text-gray-400 hover:bg-gray-700 hover:text-white hover-lift">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="text-start md:text-left">
                    <h4 class="text-lg font-semibold mb-4 text-white">Kontak</h4>
                    <div class="space-y-3">
                        <div class="flex items-start justify-start md:justify-start">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span class="text-gray-400">+62 877-2109-9337</span>
                        </div>

                        <div class="flex items-start justify-start md:justify-start">
                            <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                            <span class="text-gray-400">@smartkidsacademy__</span>
                        </div>
                    </div>
                </div>

                <!-- Address & Hours -->
                <div class="text-start md:text-left">
                    <h4 class="text-lg font-semibold mb-4 text-white">Alamat</h4>
                    <div class="space-y-3">
                        <div class="flex items-start justify-start md:justify-start">
                            <svg class="w-4 h-4 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="text-gray-400">
                                <p>Head Office : Jl Pendidikan No 11 Gedeg Mojokerto</p>
                                <p>Bimbel Umum : GG Cinta II Beratwetan Mojokerto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-400 mb-4 md:mb-0 p-4">
                        © 2025 Smart Kids Academy. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
