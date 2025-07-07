<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: `Nilai Semester Siswa` }">
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
                        Daftar Nilai Semester
                    </h3>
                </div>

                {{-- Button add data --}}
                <x-btn-add-nilai-bln />
            </div>


            <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <!-- Table Four -->
                <div
                    class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-between">
                        {{-- Right side: Search and Filter Button --}}
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
                                                Bulan Penilaian
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
                                    @foreach ($mapelList as $mapel)
                                        <th class="px-6 py-3 whitespace-nowrap">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                {{ $mapel->nama }}</p>
                                        </th>
                                    @endforeach
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
                                                Saran
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
                                    {{-- <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Unduh
                                            </p>
                                        </div>
                                    </th> --}}
                                </tr>
                            </thead>
                            <!-- table header end -->

                            <!-- table body start -->
                            <tbody>
                                @foreach ($dataSiswa as $siswa)
                                    @php
                                        // Ambil semua nilai raport siswa tersebut, bisa difilter berdasarkan bulan/tahun jika diperlukan
                                        $nilaiMapel = $siswa->raport->keyBy('id_mapel'); // keyBy agar mudah akses berdasarkan id_mapel
                                        $total = 0;
                                        $jumlahMapelAda = 0;
                                    @endphp

                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                                        {{-- Nama --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <span
                                                        class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                        {{ $siswa->nama }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Jenis Kelamin --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                            {{ $siswa->jenis_kelamin }}
                                        </td>

                                        {{-- Bulan --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <span
                                                        class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                        {{ optional($siswa->raport->first())->tanggal_penilaian ? \Carbon\Carbon::parse($siswa->raport->first()->tanggal_penilaian)->format('Y-m') : '-' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- Semester --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                            {{ optional($siswa->raport->first())->semester ?? '-' }}
                                        </td>

                                        {{-- Kelas --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                            {{ $siswa->tingkatPendidikan->nama ?? '-' }}
                                        </td>

                                        {{-- Program Bimbel --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                            {{ $siswa->program->nama_program ?? '-' }}
                                        </td>

                                        {{-- Nilai per Mapel --}}
                                        @foreach ($mapelList as $mapel)
                                            @php
                                                $nilai = $nilaiMapel[$mapel->id]->nilai ?? null;
                                                if (!is_null($nilai)) {
                                                    $total += $nilai;
                                                    $jumlahMapelAda++;
                                                }
                                            @endphp
                                            <td
                                                class="px-6 py-3 whitespace-nowrap text-center text-sm text-gray-800 dark:text-gray-200">
                                                {{ $nilai ?? '-' }}
                                            </td>
                                        @endforeach

                                        {{-- Total Score --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-center text-sm text-gray-900 dark:text-white">
                                            {{ $jumlahMapelAda > 0 ? $total : '-' }}
                                        </td>

                                        {{-- Rata-rata --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-center text-sm text-gray-900 dark:text-white">
                                            {{ $jumlahMapelAda > 0 ? round($total / $jumlahMapelAda, 2) : '-' }}
                                        </td>

                                        {{-- Saran --}}
                                        <td
                                            class="px-6 py-3 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                            {{ $siswa->raport->first()->saran ?? '-' }}
                                        </td>

                                        {{-- Aksi --}}
                                        <td
                                            class="flex items-center justify-center gap-3 px-6 py-3 whitespace-nowrap text-center text-sm text-gray-900 dark:text-white">
                                            <x-btn-aksi-nilai-bln :siswa="$siswa" />
                                        </td>

                                        {{-- Unduh --}}
                                        {{-- <td class="px-6 py-3 whitespace-nowrap text-center">
                                            <a href="#" class="text-green-600 hover:underline text-sm">PDF</a>
                                        </td> --}}
                                    </tr>
                                @endforeach
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
