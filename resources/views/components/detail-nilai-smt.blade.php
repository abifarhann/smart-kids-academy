<div class="p-4 mx-auto max-w-screen-2xl md:p-6">
    @if (Auth::check() && Auth::user()->role === 'admin')
        <div x-data="{ pageName: `Rekap Nilai Bulanan Siswa` }">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
                <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                    <p class="flex items-center gap-1.5 text-sm">
                        Penilaian Siswa
                        <svg class="stroke-current w-4 h-4" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
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
    @endif

    @if (Auth::check() && Auth::user()->role === 'wali_murid')
        <div x-data="{ pageName: `Raport Semester Siswa` }">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
                <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                    <p class="flex items-center gap-1.5 text-sm">
                        Penilaian Siswa
                        <svg class="stroke-current w-4 h-4" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </p>
                    <ol class="flex items-center gap-1.5 text-sm">
                        <li>
                            <a href="{{ route('penilaian-semester-siswa') }}"
                                class="flex items-center gap-1.5 text-gray-500 hover:text-blue-600 transition dark:text-gray-400 dark:hover:text-blue-400">
                                Evaluasi Akhir Semester
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
    @endif


    <div class="space-y-5 sm:space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div
                class="flex flex-wrap justify-between items-center border-b border-gray-100 dark:border-gray-800 px-5 py-4 sm:px-6">
                <h3 class="text-lg font-medium text-gray-800 dark:text-white/90">
                    Raport Semester
                </h3>
                {{-- Button add data --}}
                <x-btn-download-detail />
            </div>

            <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <div class="max-w-5xl mx-auto dark:bg-gray-900 shadow-xl rounded-xl overflow-hidden"
                    style="background-image: url('images/logo/logo-unfix.png'); background-position: center; background-repeat: no-repeat; position: relative;">
                    {{-- This div now acts as the container for the background image and its overlay --}}

                    {{-- The overlay for the background image --}}
                    <div
                        style="z-index: 2; position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(255, 255, 255, 0.5);">
                    </div>

                    <div class="relative z-10 border-2 border-gray-300 dark:border-gray-700 rounded-xl">
                        <div
                            class="relative z-10 flex flex-col md:flex-row items-center justify-between p-6 md:p-8 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900">
                            <div class="flex justify-center items-center space-x-4 mb-4 md:mb-0">
                                <div class="text-center md:text-left flex-1">
                                    <h1
                                        class="text-xl md:text-2xl font-bold text-blue-800 dark:text-white mb-1 leading-tight">
                                        LAPORAN AKHIR SEMESTER SISWA
                                    </h1>
                                    <h2
                                        class="text-xl md:text-2xl font-bold text-blue-800 dark:text-white mb-1 leading-tight">
                                        SMARTKIDS ACADEMY
                                    </h2>

                                    <div class="flex gap-4 justify-center">
                                        <p class="text-xs text-gray-500 dark:text-white">Head Office : Jl Pendidikan No
                                            11 Gedeg Mojokerto </p>
                                        <p class="text-xs text-gray-500 dark:text-white">Bimbel Umum : GG Cinta II
                                            Beratwetan Mojokerto </p>
                                    </div>

                                    <div class="flex gap-4 justify-center">
                                        <p class="text-xs text-gray-500 dark:text-white">No Telp: +62 877-2109-9337 </p>
                                        <p class="text-xs text-gray-500 dark:text-white">Instagram : smartkidsacademy__
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-x-2 border-black dark:border-gray-700 p-6 md:p-8 z-10">
                            <div class="flex flex-col md:flex-row justify-between gap-6">
                                <div class="grid grid-cols-[auto_1fr] gap-x-2 gap-y-1">
                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Nama:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">Firsty Angelica
                                        Valency</span>

                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Nama
                                        Wali:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">Gatot Prasetyo</span>

                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Program
                                        Bimbel:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">Regular</span>
                                </div>

                                <div class="grid grid-cols-[auto_1fr] gap-x-2 gap-y-1">
                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Kelas:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">9</span>

                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Asal
                                        Sekolah:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">MI Gedeg</span>

                                    <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Tahun
                                        Ajaran:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">2025</span>

                                    <span
                                        class="text-sm font-semibold text-gray-700 dark:text-gray-300">Semester:</span>
                                    <span class="text-sm text-gray-800 dark:text-white/90">Genap</span>
                                </div>
                            </div>


                            <div class="mb-8 mt-8">
                                <div class="flex mb-4">
                                    <span
                                        class="w-40 text-sm font-semibold text-gray-700 dark:text-gray-300">Tanggal</span>
                                    {{-- date now waktu ngeklik dan pasti --}}
                                    <span class="text-sm text-gray-800 dark:text-white/90">: 28 Juni
                                        2025</span>
                                </div>
                                <div
                                    class="shadow-lg rounded-lg overflow-hidden border border-gray-300 dark:border-gray-700">
                                    <div class="overflow-x-auto">
                                        <table class="w-full table-auto border border-gray-300 mb-6 text-sm">
                                            <colgroup>
                                                <col style="width: 5%">
                                                <col style="width: 50%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                            </colgroup>
                                            <thead class="bg-gray-100">
                                                <tr>
                                                    <th class="border px-2 py-1">No</th>
                                                    <th class="border px-2 py-1 text-left">Mata Pelajaran</th>
                                                    <th class="border px-2 py-1">Nilai Akhir Semester</th>
                                                    <th class="border px-2 py-1">Rata-rata</th>
                                                    <th class="border px-2 py-1">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <h3 class="font-bold text-sm bg-gray-200 px-3 py-1 rounded">MATA PELAJARAN
                                                UMUM</h3>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">1</td>
                                                    <td class="border px-2 py-1 text-left">Bahasa Indonesia</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">82</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">2</td>
                                                    <td class="border px-2 py-1 text-left">Matematika</td>
                                                    <td class="border px-2 py-1">78</td>
                                                    <td class="border px-2 py-1">79</td>
                                                    <td class="border px-2 py-1">B</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">3</td>
                                                    <td class="border px-2 py-1 text-left">Ilmu Pengetahuan Alam(IPA)
                                                    </td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">82</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">4</td>
                                                    <td class="border px-2 py-1 text-left">Ilmu Pengetahuan Sosial(IPS)
                                                    </td>
                                                    <td class="border px-2 py-1">78</td>
                                                    <td class="border px-2 py-1">79</td>
                                                    <td class="border px-2 py-1">B</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">5</td>
                                                    <td class="border px-2 py-1 text-left">Pendidikan Pancasila</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">82</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">6</td>
                                                    <td class="border px-2 py-1 text-left">Seni Budaya dan Prakarya
                                                    </td>
                                                    <td class="border px-2 py-1">78</td>
                                                    <td class="border px-2 py-1">79</td>
                                                    <td class="border px-2 py-1">B</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">7</td>
                                                    <td class="border px-2 py-1 text-left">PJOK</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">82</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">8</td>
                                                    <td class="border px-2 py-1 text-left">Bahasa Inggris</td>
                                                    <td class="border px-2 py-1">78</td>
                                                    <td class="border px-2 py-1">79</td>
                                                    <td class="border px-2 py-1">B</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">9</td>
                                                    <td class="border px-2 py-1 text-left">PAI & Budi Pekerti</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">82</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        {{-- tambahan if kategori MI/MTS --}}
                                        <h3 class="font-bold text-sm bg-gray-200 px-3 py-1 rounded">MATA PELAJARAN
                                            KEISLAMAN</h3>
                                        <table class="w-full table-auto border border-gray-300 mb-6 text-sm mt-2">
                                            <colgroup>
                                                <col style="width: 5%">
                                                <col style="width: 50%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                            </colgroup>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">10</td>
                                                    <td class="border px-2 py-1 text-left">Al-Qur’an Hadist</td>
                                                    <td class="border px-2 py-1">86</td>
                                                    <td class="border px-2 py-1">84</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">11</td>
                                                    <td class="border px-2 py-1 text-left">Aqidah Akhlak</td>
                                                    <td class="border px-2 py-1">81</td>
                                                    <td class="border px-2 py-1">83</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">12</td>
                                                    <td class="border px-2 py-1 text-left">Fiqih</td>
                                                    <td class="border px-2 py-1">81</td>
                                                    <td class="border px-2 py-1">83</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">13</td>
                                                    <td class="border px-2 py-1 text-left">SKI</td>
                                                    <td class="border px-2 py-1">81</td>
                                                    <td class="border px-2 py-1">83</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">14</td>
                                                    <td class="border px-2 py-1 text-left">Bahasa Arab</td>
                                                    <td class="border px-2 py-1">81</td>
                                                    <td class="border px-2 py-1">83</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        {{-- Divider TK --}}
                                        {{-- mapel siswa TK --}}

                                        <table class="w-full table-auto border border-gray-300 mb-6 text-sm mt-2">
                                            <colgroup>
                                                <col style="width: 5%">
                                                <col style="width: 50%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                                <col style="width: 15%">
                                            </colgroup>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">1</td>
                                                    <td class="border px-2 py-1 text-left">Kemampuan Dasar</td>
                                                    <td class="border px-2 py-1">88</td>
                                                    <td class="border px-2 py-1">88</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">2</td>
                                                    <td class="border px-2 py-1 text-left">Kognitif</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">3</td>
                                                    <td class="border px-2 py-1 text-left">Bahasa</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">4</td>
                                                    <td class="border px-2 py-1 text-left">Kemampuan Emosional</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="border px-2 py-1">4</td>
                                                    <td class="border px-2 py-1 text-left">Motorik</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">85</td>
                                                    <td class="border px-2 py-1">A</td>
                                                </tr>
                                                <!-- Lanjutkan 3 baris lainnya -->
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                {{-- kehadiran --}}
                                <div class="text-start flex flex-row mt-8 gap-1">
                                    <h1 class="text-center">Kehadiran: </h1>
                                    <p class="text-center flex-row">
                                    <h1>24</h1>
                                    <h1>/30 hari</h1>
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 text-sm mb-6">
                                <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                    <h4
                                        class="font-bold mb-3 text-gray-700 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-2 flex items-center gap-2">
                                        <span class="text-green-500"> Keterangan Penilaian </span>
                                    </h4>
                                    <div class="space-y-1 text-xs text-gray-700 dark:text-white">
                                        <div><span class="font-semibold">A :</span> ≥ 85 (Sangat Baik)</div>
                                        <div><span class="font-semibold">B :</span> ≥ 70 (Baik)</div>
                                        <div><span class="font-semibold">C :</span> ≤ 70 (Cukup)</div>
                                    </div>
                                </div>

                                <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                    <h4
                                        class="font-bold mb-3 text-gray-700 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-2 flex items-center gap-2">
                                        <span class="text-green-500">Catatan </span>
                                    </h4>
                                    <div class="space-y-1 text-xs text-gray-700 dark:text-white">
                                        <p>Anaknya baik dst</p>
                                    </div>
                                </div>

                                <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                    <h4
                                        class="font-bold mb-3 text-gray-700 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-2 flex items-center gap-2">
                                        <span class="text-green-500">Apresiasi Siswa </span>
                                    </h4>
                                    <div class="space-y-1 text-xs text-gray-700 dark:text-white">
                                        <p>Dalam Kegiatan Belajar siswa Kooperatif</p>
                                    </div>
                                </div>

                                <div
                                    class="flex sm:flex-col md:flex-row justify-between items-end mt-8 pt-6 border-t border-gray-300 dark:border-gray-700">
                                    <div class="text-center mb-6 md:mb-0">
                                        <p class="text-sm mb-16 text-gray-700 dark:text-gray-300">Mengetahui,</p>
                                        <p class="text-sm mb-1 font-semibold text-gray-800 dark:text-white/90">
                                            Orang
                                            Tua / Wali</p>
                                        <div class="border-b border-black dark:border-gray-500 w-32 mx-auto"></div>
                                    </div>

                                    <div class="text-center">
                                        <p class="text-sm mb-2 text-gray-700 dark:text-gray-300">Mojokerto, 21 Juni
                                            2014
                                        </p>
                                        <p class="text-sm mb-14 font-semibold text-gray-800 dark:text-white/90">
                                            Admin
                                        </p>
                                        <div class="border-b border-black dark:border-gray-500 w-32 mx-auto mb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-2 border-t-0 border-black dark:border-gray-700 h-2 rounded-b-xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
