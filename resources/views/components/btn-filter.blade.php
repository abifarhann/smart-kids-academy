<div x-data="{ open: false }" class="relative z-50" x-cloak>
    {{-- Tombol Filter --}}
    <button @click="open = !open"
        class="text-theme-sm shadow-theme-xs inline-flex h-10 items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
        <svg class="stroke-current fill-white dark:fill-gray-800" width="20" height="20" viewBox="0 0 20 20"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.29004 5.90393H17.7067" stroke="" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M17.7075 14.0961H2.29085" stroke="" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path
                d="M12.0826 3.33331C13.5024 3.33331 14.6534 4.48431 14.6534 5.90414C14.6534 7.32398 13.5024 8.47498 12.0826 8.47498C10.6627 8.47498 9.51172 7.32398 9.51172 5.90415C9.51172 4.48432 10.6627 3.33331 12.0826 3.33331Z"
                fill="" stroke="" stroke-width="1.5"></path>
            <path
                d="M7.91745 11.525C6.49762 11.525 5.34662 12.676 5.34662 14.0959C5.34661 15.5157 6.49762 16.6667 7.91745 16.6667C9.33728 16.6667 10.4883 15.5157 10.4883 14.0959C10.4883 12.676 9.33728 11.525 7.91745 11.525Z"
                fill="" stroke="" stroke-width="1.5"></path>
        </svg>

        Filter
    </button>

    {{-- Dropdown --}}
    <div x-show="open" x-transition @click.outside="open = false"
        class="absolute right-0 z-100 mt-2 w-72 origin-top-right rounded-md border border-gray-200 bg-white p-4 shadow-lg dark:border-gray-700 dark:bg-gray-800 sm:w-80">

        <form method="GET" action="{{ $action ?? url()->current() }}" class="space-y-4">
            {{-- Tingkat pendidikan --}}
            @if (isset($tingkatPendidikanList))
                <div>
                    <label for="jenjang"
                        class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Jenjang</label>
                    <select id="jenjang" name="jenjang"
                        class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                        <option value="">Semua</option>
                        @foreach ($tingkatPendidikanList as $tingkat)
                            <option value="{{ $tingkat->id }}"
                                {{ request('jenjang') == $tingkat->id ? 'selected' : '' }}>
                                {{ $tingkat->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            @if (isset($programList))
                <div>
                    <label for="program"
                        class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Program</label>
                    <select name="program" id="program"
                        class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                        <option value="">Semua</option>
                        @foreach ($programList as $program)
                            <option value="{{ $program->id }}"
                                {{ request('program') == $program->id ? 'selected' : '' }}>
                                {{ $program->nama_program }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif
            {{-- Bulan --}}
            @if (isset($showBulan) && $showBulan)
                <div>
                    <label for="bulan"
                        class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Bulan</label>
                    <select id="bulan" name="bulan"
                        class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                        <option value="">Semua</option>
                        @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $index => $namaBulan)
                            <option value="{{ $index + 1 }}" {{ request('bulan') == $index + 1 ? 'selected' : '' }}>
                                {{ $namaBulan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            {{-- Semester --}}
            @if (isset($showSemester) && $showSemester)
                <div>
                    <label for="semester"
                        class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Semester</label>
                    <select id="semester" name="semester"
                        class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                        <option value="">Semua</option>
                        <option value="1" {{ request('semester') == '1' ? 'selected' : '' }}>Ganjil</option>
                        <option value="2" {{ request('semester') == '2' ? 'selected' : '' }}>Genap</option>
                    </select>
                </div>
            @endif

            {{-- Tahun Ajar --}}
            @if (isset($showTahunAjar) && $showTahunAjar && isset($tahunAjarList))
                <div>
                    <label for="tahun_ajar"
                        class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Tahun Ajar</label>
                    <select id="tahun_ajar" name="tahun_ajar"
                        class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                        <option value="">Semua</option>
                        @foreach ($tahunAjarList as $tahun)
                            <option value="{{ $tahun }}"
                                {{ request('tahun_ajar') == $tahun ? 'selected' : '' }}>
                                {{ $tahun }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            {{-- Tombol Terapkan --}}
            <div class="flex justify-end pt-2">
                <button type="submit"
                    class="inline-flex items-center justify-center rounded-md bg-brand-600 px-4 py-2 text-sm font-medium text-black shadow-sm transition-colors duration-200 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:bg-brand-700 dark:hover:bg-brand-800 dark:focus:ring-offset-gray-900">
                    Terapkan
                </button>
            </div>
        </form>
    </div>
</div>
