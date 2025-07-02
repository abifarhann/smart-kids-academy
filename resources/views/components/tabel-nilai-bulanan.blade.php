<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: `Nilai Bulanan Siswa` }">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
            <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                <ol class="flex items-center gap-1.5">
                    <p class="inline-flex items-center text-sm gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                        href="index.html">
                        Penilaian Siswa
                        <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </p>
                    <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="space-y-5 sm:space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="flex justify-between border-b border-gray-100 dark:border-gray-800 sm:px-6">
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                        Daftar Nilai Bulanan
                    </h3>
                </div>

                {{-- Button add data --}}
                <x-btn-add-nilai-bln />
            </div>


            <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <!-- Table Four -->
                <div
                    class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-end">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            {{-- fitur pencarian data --}}
                            <form>
                                <div class="relative">
                                    <span class="absolute -translate-y-1/2 pointer-events-none top-1/2 left-4">
                                        <svg class="fill-gray-500 dark:fill-gray-400" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.04199 9.37381C3.04199 5.87712 5.87735 3.04218 9.37533 3.04218C12.8733 3.04218 15.7087 5.87712 15.7087 9.37381C15.7087 12.8705 12.8733 15.7055 9.37533 15.7055C5.87735 15.7055 3.04199 12.8705 3.04199 9.37381ZM9.37533 1.54218C5.04926 1.54218 1.54199 5.04835 1.54199 9.37381C1.54199 13.6993 5.04926 17.2055 9.37533 17.2055C11.2676 17.2055 13.0032 16.5346 14.3572 15.4178L17.1773 18.2381C17.4702 18.531 17.945 18.5311 18.2379 18.2382C18.5308 17.9453 18.5309 17.4704 18.238 17.1775L15.4182 14.3575C16.5367 13.0035 17.2087 11.2671 17.2087 9.37381C17.2087 5.04835 13.7014 1.54218 9.37533 1.54218Z"
                                                fill=""></path>
                                        </svg>
                                    </span>
                                    <input type="text" placeholder="Search..."
                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-10 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-[42px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden xl:w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                </div>
                            </form>

                            {{-- fitur filter data --}}
                            <x-btn-filter />

                        </div>
                    </div>

                    <div class="max-w-full overflow-x-auto custom-scrollbar">
                        <table class="min-w-full">
                            <!-- table header start -->
                            <thead class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                <tr>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Nama Lengkap
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Jenis Kelamin
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Nama Wali
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Tanggal Submit
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Minggu
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Bulan
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Semester
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Asal Sekolah
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Kelas
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Program Bimbel
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Bahasa Indonesia
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Matematika
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                IPAS
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Pendidikan Pancasila
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Seni Budaya & Prakarya
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                PJOK
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Bahasa Inggris
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                PAI & Budi Pekerti
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Alquran Hadist
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Aqidah Akhlak
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Fiqih
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                SKI
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Bahasa Arab
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Total Score
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Rata-rata
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Catatan Mentor
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Detail Laporan
                                            </p>
                                        </div>
                                    </th>
                                    <th class="py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Aksi
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Unduh
                                            </p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- table header end -->

                            <!-- table body start -->
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800 transition-colors">
                                {{-- @foreach ($siswaList as $siswa) --}}
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                                    {{-- 1. Nama Lengkap --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Firsty Angelica Valency
                                        </span>
                                    </td>

                                    {{-- 2. Jenis Kelamin --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Perempuan
                                        </span>
                                    </td>

                                    {{-- 3. Nama Wali --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Gatot Prasetyo
                                        </span>
                                    </td>

                                    {{-- 4. Tanggal Submit --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            01-08-2023
                                        </span>
                                    </td>

                                    {{-- Laporan per bulan apa --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            1
                                        </span>
                                    </td>

                                    {{-- Laporan per bulan apa --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Januari
                                        </span>
                                    </td>

                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Genap
                                        </span>
                                    </td>

                                    {{-- 5. Asal Sekolah --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            MI Gedeg
                                        </span>
                                    </td>

                                    {{-- 6. Kelas --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            9
                                        </span>
                                    </td>

                                    {{-- 7. Program Bimbel --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                            Reguler
                                        </span>
                                    </td>

                                    {{-- 8. Bahasa Indonesia --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            90
                                        </span>
                                    </td>

                                    {{-- 9. Matematika --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            85
                                        </span>
                                    </td>

                                    {{-- 10. IPA --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            88
                                        </span>
                                    </td>

                                    {{-- 11. IPS --}}
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            87
                                        </span>
                                    </td>

                                    {{-- 12. Pendidikan Pancasila --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            92
                                        </span>
                                    </td>

                                    {{-- 13. Seni Budaya & Prakarya --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            89
                                        </span>
                                    </td>

                                    {{-- 14. PJOK --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            93
                                        </span>
                                    </td>

                                    {{-- 15. Bahasa Inggris --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            84
                                        </span>
                                    </td>

                                    {{-- 16. PAI & Budi Pekerti --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            91
                                        </span>
                                    </td>

                                    {{-- 17. Alquran Hadist --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            95
                                        </span>
                                    </td>

                                    {{-- 18. Aqidah Akhlak --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            89
                                        </span>
                                    </td>

                                    {{-- 19. Fiqih --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            87
                                        </span>
                                    </td>

                                    {{-- 20. SKI --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            90
                                        </span>
                                    </td>

                                    {{-- 21. Bahasa Arab --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            86
                                        </span>
                                    </td>

                                    {{-- total score --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            1000
                                        </span>
                                    </td>

                                    {{-- rata2 --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                            86,9
                                        </span>
                                    </td>

                                    {{-- ctt mentor --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <span class="text-theme-sm text-gray-700 dark:text-gray-400"
                                            style="display: inline-block; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                                            title="Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya">
                                            Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya
                                            Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya
                                            Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya
                                            Baik dia rajin tp nakal sering ngobrol membuat tidak fokus temannya
                                        </span>
                                    </td>

                                    {{-- 22. Detail Laporan --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <a href="{{ route('raport-bulanan') }}" title="Lihat laporan"
                                            class="text-gray-500 hover:text-brand-600">
                                            Lihat
                                        </a>
                                    </td>

                                    {{-- 23. Aksi --}}
                                    <td class="py-2 whitespace-nowrap text-center">
                                        <div class="flex justify-center items-center gap-2">
                                            <x-btn-aksi-nilai-bln />
                                        </div>
                                    </td>


                                    {{-- 24. Unduh --}}
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                        <a href="#" title="Unduh laporan"
                                            class="text-gray-500 hover:text-brand-600">
                                            <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>

                            <!-- table body end -->
                        </table>
                    </div>
                </div>
                {{-- pagination --}}
                <x-pagination />
                <!-- Table Four -->
            </div>
        </div>
    </div>
</div>
</div>
