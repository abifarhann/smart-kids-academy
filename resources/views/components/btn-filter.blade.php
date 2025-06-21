{{-- dinamis btn --}}
{{-- <div x-data="{ open: false }" class="relative"> --}}
{{-- Tombol Filter --}}
{{-- <button @click="open = !open"
        class="text-theme-sm shadow-theme-xs inline-flex h-10 items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
        <svg class="stroke-current fill-white dark:fill-gray-800" width="20" height="20" viewBox="0 0 20 20">
            <path d="M2.29 5.9H17.71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.71 14.1H2.29" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.08 3.33C13.5 3.33 14.65 4.48 14.65 5.9C14.65 7.32 13.5 8.47 12.08 8.47C10.66 8.47 9.51 7.32 9.51 5.9C9.51 4.48 10.66 3.33 12.08 3.33Z" fill="none" stroke-width="1.5"/>
            <path d="M7.92 11.53C6.5 11.53 5.35 12.68 5.35 14.1C5.35 15.52 6.5 16.67 7.92 16.67C9.34 16.67 10.49 15.52 10.49 14.1C10.49 12.68 9.34 11.53 7.92 11.53Z" fill="none" stroke-width="1.5"/>
        </svg>
        Filter
    </button> --}}

{{-- Dropdown Filter --}}
{{-- <div x-show="open" @click.outside="open = false"
        class="absolute z-10 mt-2 w-72 rounded-md border border-gray-200 bg-white shadow-lg dark:border-gray-700 dark:bg-gray-900 p-4 space-y-3">
        {{-- <form method="GET" action="{{ route('siswa.index') }}" class="space-y-3">

            {{-- Jenjang --}}
{{-- <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jenjang</label>
                <select name="jenjang"
                    class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Semua</option>
                    <option value="TK" {{ request('jenjang') == 'TK' ? 'selected' : '' }}>TK</option>
                    <option value="SD" {{ request('jenjang') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ request('jenjang') == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="Umum" {{ request('jenjang') == 'Umum' ? 'selected' : '' }}>Umum</option>
                </select>
            </div> --}}

{{-- Kategori --}}
{{-- <div>
                {{-- <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                <select name="kategori"
                    class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Semua</option>
                    <option value="Regular" {{ request('kategori') == 'Regular' ? 'selected' : '' }}>Regular</option>
                    <option value="Private" {{ request('kategori') == 'Private' ? 'selected' : '' }}>Private</option>
                    <option value="Community" {{ request('kategori') == 'Community' ? 'selected' : '' }}>Community</option>
                </select> --}}
{{-- </div> --}}

{{-- Kelas --}}
{{-- <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kelas</label>
                <select name="kelas"
                    class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Semua</option>
                    <optgroup label="TK">
                        <option value="TK A" {{ request('kelas') == 'TK A' ? 'selected' : '' }}>TK A</option>
                        <option value="TK B" {{ request('kelas') == 'TK B' ? 'selected' : '' }}>TK B</option>
                    </optgroup>
                    <optgroup label="SD">
                        @for ($i = 1; $i <= 6; $i++)
                            <option value="Kelas {{ $i }}" {{ request('kelas') == "Kelas $i" ? 'selected' : '' }}>Kelas {{ $i }}</option>
                        @endfor
                    </optgroup>
                    <optgroup label="SMP">
                        @for ($i = 7; $i <= 9; $i++)
                            <option value="Kelas {{ $i }}" {{ request('kelas') == "Kelas $i" ? 'selected' : '' }}>Kelas {{ $i }}</option>
                        @endfor
                    </optgroup>
                </select>
            </div> --}}

{{-- Status --}}
{{-- <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                <select name="status"
                    class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                    <option value="">Semua</option>
                    <option value="aktif" {{ request('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="nonaktif" {{ request('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>

            <div class="flex justify-end pt-2">
                <button type="submit"
                    class="px-3 py-1.5 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                    Terapkan
                </button>
            </div> --}}
{{-- </form> 
    </div> 
</div> --}}


<div x-data="{ open: false }" class="relative" x-cloak>
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

        <form class="space-y-4">
            {{-- Jenjang --}}
            <div>
                <label for="jenjang" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Jenjang</label>
                <select id="jenjang"
                    class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                    <option>Semua</option>
                    <option>TK</option>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>Umum</option>
                </select>
            </div>

            {{-- Kategori --}}
            <div>
                <label for="kategori" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</label>
                <select id="kategori"
                    class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                    <option>Semua</option>
                    <option>Regular</option>
                    <option>Private</option>
                    <option>Community</option>
                </select>
            </div>

            {{-- Kelas --}}
            <div>
                <label for="kelas" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Kelas</label>
                <select id="kelas"
                    class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                    <option>Semua</option>
                    <optgroup label="TK">
                        <option>TK A</option>
                        <option>TK B</option>
                    </optgroup>
                    <optgroup label="SD">
                        <option>Kelas 1</option>
                        <option>Kelas 2</option>
                        <option>Kelas 3</option>
                        <option>Kelas 4</option>
                        <option>Kelas 5</option>
                        <option>Kelas 6</option>
                    </optgroup>
                    <optgroup label="SMP">
                        <option>Kelas 7</option>
                        <option>Kelas 8</option>
                        <option>Kelas 9</option>
                    </optgroup>
                </select>
            </div>

            {{-- Status --}}
            <div>
                <label for="status" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                <select id="status"
                    class="w-full rounded-md border-gray-300 bg-white px-3 py-2 text-sm text-gray-800 shadow-sm focus:border-brand-500 focus:ring-brand-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-200">
                    <option>Semua</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>

            {{-- Tombol Terapkan --}}
            <div class="flex justify-end pt-2">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md bg-brand-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors duration-200 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:bg-brand-700 dark:hover:bg-brand-800 dark:focus:ring-offset-gray-900">
                    Terapkan
                </button>
            </div>
        </form>
    </div>
</div>
