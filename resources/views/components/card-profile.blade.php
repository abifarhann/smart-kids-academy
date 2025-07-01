<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: `Profile` }">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>

            <nav>
                <ol class="flex items-center gap-1.5">
                    <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] lg:p-6">
        <h3 class="mb-5 text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-7">
            Data Diri
        </h3>

        <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                {{-- data wali --}}
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-6">
                        Informasi Wali Murid
                    </h4>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Nama Lengkap
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                Upik Sudiati
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Nomor WhatsApp
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                088996429778
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- loop jika >1 --}}
        <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-6">
                        Informasi Siswa
                    </h4>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Nama Lengkap
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                Firsty Angelica Valency
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Kelas
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                6
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Tempat Lahir
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                Mojokerto
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Asal Sekolah
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                SDN Bandung 1
                            </p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Tanggal Lahir
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                12/10/2003
                            </p>
                        </div>
                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Program Bimbel
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                Regular
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- ambil data dari tabel siswa --}}
        <div class="p-5 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6 mb-4">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div class="min-w-0 flex-1">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90 mb-3">
                        Address
                    </h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 break-words leading-relaxed">
                        1234 Very Long Street Name That Goes On Forever, Apartment Building Complex Unit 567, Some Really Long City Name, State 12345-6789
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
