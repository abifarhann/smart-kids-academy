<div class="p-4 mx-auto max-w-screen-2xl md:p-6">
    <div x-data="{ pageName: `Rekap Nilai Bulanan Siswa` }">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
            <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                <p class="flex items-center gap-1.5 text-sm">
                    Penilaian Siswa
                    <svg class="stroke-current w-4 h-4" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </p>
                <ol class="flex items-center gap-1.5 text-sm">
                    <li>
                        <a href="{{ route('raport-bulanan') }}"
                            class="flex items-center gap-1.5 text-gray-500 hover:text-blue-600 transition dark:text-gray-400 dark:hover:text-blue-400">
                            Raport
                            <svg class="stroke-current w-4 h-4" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                    stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="text-gray-800 dark:text-white/90" x-text="pageName"></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="space-y-5 sm:space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div
                class="flex flex-wrap justify-between items-center border-b border-gray-100 dark:border-gray-800 px-5 py-4 sm:px-6">
                <h3 class="text-lg font-medium text-gray-800 dark:text-white/90">
                    Raport Bulan Januari
                </h3>
                {{-- Button add data --}}
                <x-btn-download-detail />
            </div>

            <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800 ">
                <div class="max-w-5xl mx-auto bg-white dark:bg-gray-900 shadow-xl rounded-xl overflow-hidden">
                    <div class="relative border-2 border-gray-300 dark:border-gray-700 rounded-xl">
                        <div
                            class="relative z-100 flex flex-col md:flex-row items-center justify-between p-6 md:p-8 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900">
                            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                                <div class="text-center md:text-left flex-1">
                                    <h1
                                        class="text-xl md:text-2xl font-extrabold text-blue-800 dark:text-white mb-1 leading-tight">
                                        LAPORAN PENILAIAN BULANAN SISWA
                                    </h1>
                                    <h2
                                        class="text-xl md:text-2xl font-extrabold text-blue-800 dark:text-white mb-1 leading-tight">
                                        SMARTKIDS ACADEMY
                                    </h2>
                                    <p class="text-xs text-gray-500 dark:text-gray-500">Jl Lingkar Utara Kalibaru
                                        Tengah, Bekasi Utara Telp : 021-88881168</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-x-2 border-black dark:border-gray-700 p-6 md:p-8">
                            <div class="space-y-2 flex justify-between items-center">
                                <div class="flex flex-col">
                                    <div class="flex">
                                        <span
                                            class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Nama</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: Firsty Angelica
                                            Valency</span>
                                    </div>
                                    <div class="flex">
                                        <span class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Nama
                                            Wali</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: Gatot Prasetyo</span>
                                    </div>
                                    <div class="flex">
                                        <span
                                            class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Program
                                            Bimbel</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: Regular</span>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex">
                                        <span
                                            class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Kelas</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: 9</span>
                                    </div>
                                    <div class="flex">
                                        <span class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Asal
                                            Sekolah</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: MI Gedeeg</span>
                                    </div>
                                    <div class="flex">
                                        <span class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Tahun
                                            Ajaran</span>
                                        <span class="text-sm text-gray-800 dark:text-white/90">: 2025</span>
                                    </div>
                                    <div class="flex">
                                        <span
                                            class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Tanggal</span>
                                        {{-- date now waktu ngeklik --}}
                                        <span class="text-sm text-gray-800 dark:text-white/90">: 28 Januari 2025</span>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-8">
                                <h3
                                    class="text-xl font-bold mb-4 text-center text-gray-700 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 py-3 rounded-lg dark:text-white/90">
                                    NILAI AKADEMIK
                                </h3>
                                <div
                                    class="shadow-lg rounded-lg overflow-hidden border border-gray-300 dark:border-gray-700">
                                    <div class="overflow-x-auto">
                                        <table class="w-full min-w-[700px] text-sm"> {{-- min-w is still important for consistent column widths --}}
                                            <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                                                <tr>
                                                    <th rowspan="2"
                                                        class="border-r dark:text-white text-gray-600 border-blue-400 px-4 py-3 text-center w-16 font-semibold">
                                                        No</th>
                                                    <th rowspan="2"
                                                        class="border-r dark:text-white text-gray-600 border-blue-400 px-6 py-3 text-left font-semibold">
                                                        Mata Pelajaran</th>
                                                    <th colspan="4"
                                                        class="border-b dark:text-white text-gray-600 border-r border-blue-400 px-4 py-3 text-center font-semibold">
                                                        Nilai Harian
                                                    </th>
                                                    <th rowspan="2"
                                                        class="border-r dark:text-white text-gray-600  border-blue-400 px-4 py-3 text-center font-semibold">
                                                        Nilai Ujian</th>
                                                    <th rowspan="2"
                                                        class="dark:text-white text-gray-600 px-4 py-3 text-center font-semibold">
                                                        Rata-rata</th>
                                                </tr>
                                                <tr>
                                                    <th
                                                        class="border-r dark:text-white text-gray-600  border-blue-400 px-2 py-2 text-center font-semibold">
                                                        M1</th>
                                                    <th
                                                        class="border-r dark:text-white text-gray-600  border-blue-400 px-2 py-2 text-center font-semibold">
                                                        M2</th>
                                                    <th
                                                        class="border-r dark:text-white text-gray-600 -blue-400 px-2 py-2 text-center font-semibold">
                                                        M3</th>
                                                    <th
                                                        class="border-r dark:text-white text-gray-600  px-2 py-2 text-center font-semibold">
                                                        M4</th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white dark:even:bg-gray-800 dark:odd:bg-gray-900">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-100">
                                                        1</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Bahasa Indonesia</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        88</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        82</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white dark:even:bg-gray-800 dark:odd:bg-gray-9000 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        2</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Matematika</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        80</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        3</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        IPA (Ilmu Pengetahuan Alam)</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        79</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        4</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        IPS (Ilmu Pengetahuan Sosial)</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        70</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        72</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        77</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        75</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        5</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Pendidikan Pancasila</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        78</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        6</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Seni Budaya & Prakarya</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        88</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        90</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        88</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        85</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        7</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        PJOK (Pendidikan Jasmani)</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        88</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        90</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        92</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        90</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        87</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        8</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Bahasa Inggris</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        70</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        73</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        76</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-gray-50 odd:bg-white  dark:even:bg-gray-800 dark:odd:bg-gray-900 ">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        9</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        PAI & Budi Pekerti</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        81</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        83</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        83</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        81</td>
                                                </tr>

                                                <tr
                                                    class="bg-gradient-to-r from-green-100 to-green-200 dark:from-green-900/30 dark:to-green-800/30">
                                                    <td colspan="8"
                                                        class="border-y border-gray-300 dark:border-gray-700 px-4 py-3 font-extrabold text-center text-green-800 dark:text-green-300 uppercase tracking-wide">
                                                        MATA PELAJARAN KEISLAMAN
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="even:bg-green-50 odd:bg-white hover:bg-green-100 dark:even:bg-green-900/10 dark:odd:bg-gray-900 dark:hover:bg-green-900/20 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        10</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Al-Quran Hadist</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        85</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        86</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        83</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        88</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        86</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        84</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-green-50 odd:bg-white hover:bg-green-100 dark:even:bg-green-900/10 dark:odd:bg-gray-900 dark:hover:bg-green-900/20 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        11</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Aqidah Akhlak</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        81</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        79</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        84</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        81</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        83</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-green-50 odd:bg-white hover:bg-green-100 dark:even:bg-green-900/10 dark:odd:bg-gray-900 dark:hover:bg-green-900/20 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        12</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Fiqih</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        79</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        77</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        79</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        77</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-green-50 odd:bg-white hover:bg-green-100 dark:even:bg-green-900/10 dark:odd:bg-gray-900 dark:hover:bg-green-900/20 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        13</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        SKI (Sejarah Kebudayaan Islam)</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        82</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        84</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        80</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        86</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        84</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        82</td>
                                                </tr>
                                                <tr
                                                    class="even:bg-green-50 odd:bg-white hover:bg-green-100 dark:even:bg-green-900/10 dark:odd:bg-gray-900 dark:hover:bg-green-900/20 transition-colors">
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-medium text-gray-700 dark:text-gray-300">
                                                        14</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-6 py-3 font-medium text-gray-800 dark:text-white/90">
                                                        Bahasa Arab</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        70</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        73</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        75</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-2 py-3 text-center text-blue-600 dark:text-white">
                                                        78</td>
                                                    <td
                                                        class="border-r border-gray-200 dark:border-gray-700 px-4 py-3 text-center font-bold text-blue-600 dark:text-white">
                                                        73</td>
                                                    <td
                                                        class="px-4 py-3 text-center font-bold text-green-600 dark:text-white">
                                                        75</td>
                                                </tr>

                                                <tr
                                                    class="bg-gradient-to-r from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30">
                                                    <td colspan="6"
                                                        class="border-r border-gray-300 dark:border-gray-700 px-4 py-4 text-center font-extrabold text-blue-800 dark:text-blue-300 uppercase tracking-wide">
                                                        RATA-RATA KESELURUHAN
                                                    </td>
                                                    <td
                                                        class="border-r border-gray-300 dark:border-gray-700 px-4 py-4 text-center font-extrabold text-xl text-blue-600 dark:text-white">
                                                        81.2</td>
                                                    <td
                                                        class="px-4 py-4 text-center font-extrabold text-xl text-green-600 dark:text-white">
                                                        79.8</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 text-sm mb-6">
                                <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                    <h4
                                        class="font-bold mb-3 text-gray-700 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2 flex items-center gap-2">
                                        <span class="text-green-500"> Keterangan Penilaian </span>
                                    </h4>
                                    <div class="space-y-1 text-xs text-gray-700 dark:text-gray-300">
                                        <div><span class="font-semibold">A :</span> ≥ 85 (Sangat Baik)</div>
                                        <div><span class="font-semibold">B :</span> 70-84 (Baik)</div>
                                        <div><span class="font-semibold">C :</span> 55-69 (Cukup)</div>
                                        <div><span class="font-semibold">D :</span> &lt; 55 (Kurang)</div>
                                    </div>
                                </div>

                                <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                    <h4
                                        class="font-bold mb-3 text-gray-700 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2 flex items-center gap-2">
                                        <span class="text-green-500">Catatan </span>
                                    </h4>
                                    <div class="space-y-1 text-xs text-gray-700 dark:text-gray-300">
                                        <p>Anaknya baik dst</p>
                                    </div>
                                </div>


                                <div
                                    class="flex sm:flex-col md:flex-row justify-between items-end mt-8 pt-6 border-t border-gray-300 dark:border-gray-700">
                                    <div class="text-center mb-6 md:mb-0">
                                        <p class="text-sm mb-16 text-gray-700 dark:text-gray-300">Mengetahui,</p>
                                        <p class="text-sm mb-1 font-semibold text-gray-800 dark:text-white/90">Orang
                                            Tua / Wali</p>
                                        <div class="border-b border-black dark:border-gray-500 w-32 mx-auto"></div>
                                    </div>

                                    <div class="text-center">
                                        <p class="text-sm mb-2 text-gray-700 dark:text-gray-300">Bekasi, 21 Juni 2014
                                        </p>
                                        <p class="text-sm mb-14 font-semibold text-gray-800 dark:text-white/90">Admin
                                        </p>
                                        <div class="border-b border-black dark:border-gray-500 w-32 mx-auto mb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-2 border-t-0 border-black dark:border-gray-700 h-2 rounded-b-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
