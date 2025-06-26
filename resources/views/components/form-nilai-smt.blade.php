<!-- Breadcrumb Start -->
<div x-data="{ pageName: `Tambah Rekap Nilai Semester` }">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
        <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
            <p class="flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400">
                Penilaian Siswa
                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </p>
            <ol class="flex items-center gap-1.5 text-sm">
                <!-- Rekapitulasi Data -->

                <!-- Siswa -->
                <li>
                    <a href="{{ route('nilai-semester') }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Nilai Semester
                        <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>

                <!-- Tambah Data Siswa -->
                <li class="text-gray-800 dark:text-white/90" x-text="pageName"></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->

{{-- Data Siswa --}}
<form class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Profil Siswa
        </h3>
    </div>
    <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
        <!-- Elements -->
        <div class="flex justify-start gap-4 items-center">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Nama Siswa
                </label>
                <input type="text" placeholder="Masukkan nama siswa"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            {{-- jenis kelamin --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Jenis Kelamin
                </label>
                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                    <select
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        :class="isOptionSelected & amp & amp 'text-gray-800 dark:text-white/90'"
                        @change="isOptionSelected = true">
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Laki-Laki
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Perempuan
                        </option>
                    </select>
                    <span
                        class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <!-- Elements -->
        <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Nama Wali
            </label>
            <input type="text" placeholder="Masukkan nama wali siswa"
                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
        </div>

        {{-- tgl lahir --}}
        <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Tanggal submit
            </label>

            <div class="relative">
                <div class="flatpickr-wrapper"><input type="text" placeholder="Select date"
                        class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input"
                        readonly="readonly">
                    <div class="flatpickr-calendar animate static null arrowBottom arrowLeft" tabindex="-1">
                        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></span>
                            <div class="flatpickr-month">
                                <div class="flatpickr-current-month"><span class="cur-month">June </span>
                                    <div class="numInputWrapper"><input class="numInput cur-year" type="number"
                                            tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span
                                            class="arrowDown"></span></div>
                                </div>
                            </div><span class="flatpickr-next-month"><svg class="stroke-current" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></span>
                        </div>
                        <div class="flatpickr-innerContainer">
                            <div class="flatpickr-rContainer">
                                <div class="flatpickr-weekdays">
                                    <div class="flatpickr-weekdaycontainer">
                                        <span class="flatpickr-weekday">
                                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                                            class="flatpickr-weekday">Tue</span><span
                                            class="flatpickr-weekday">Wed</span><span
                                            class="flatpickr-weekday">Thu</span><span
                                            class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                                        </span>
                                    </div>
                                </div>
                                <div class="flatpickr-days" tabindex="-1">
                                    <div class="dayContainer"><span class="flatpickr-day" aria-label="June 1, 2025"
                                            tabindex="-1">1</span><span class="flatpickr-day"
                                            aria-label="June 2, 2025" tabindex="-1">2</span><span
                                            class="flatpickr-day" aria-label="June 3, 2025"
                                            tabindex="-1">3</span><span class="flatpickr-day"
                                            aria-label="June 4, 2025" tabindex="-1">4</span><span
                                            class="flatpickr-day" aria-label="June 5, 2025"
                                            tabindex="-1">5</span><span class="flatpickr-day"
                                            aria-label="June 6, 2025" tabindex="-1">6</span><span
                                            class="flatpickr-day" aria-label="June 7, 2025"
                                            tabindex="-1">7</span><span class="flatpickr-day"
                                            aria-label="June 8, 2025" tabindex="-1">8</span><span
                                            class="flatpickr-day" aria-label="June 9, 2025"
                                            tabindex="-1">9</span><span class="flatpickr-day"
                                            aria-label="June 10, 2025" tabindex="-1">10</span><span
                                            class="flatpickr-day" aria-label="June 11, 2025"
                                            tabindex="-1">11</span><span class="flatpickr-day"
                                            aria-label="June 12, 2025" tabindex="-1">12</span><span
                                            class="flatpickr-day" aria-label="June 13, 2025"
                                            tabindex="-1">13</span><span class="flatpickr-day"
                                            aria-label="June 14, 2025" tabindex="-1">14</span><span
                                            class="flatpickr-day" aria-label="June 15, 2025"
                                            tabindex="-1">15</span><span class="flatpickr-day"
                                            aria-label="June 16, 2025" tabindex="-1">16</span><span
                                            class="flatpickr-day" aria-label="June 17, 2025"
                                            tabindex="-1">17</span><span class="flatpickr-day"
                                            aria-label="June 18, 2025" tabindex="-1">18</span><span
                                            class="flatpickr-day" aria-label="June 19, 2025"
                                            tabindex="-1">19</span><span class="flatpickr-day"
                                            aria-label="June 20, 2025" tabindex="-1">20</span><span
                                            class="flatpickr-day today" aria-label="June 21, 2025"
                                            aria-current="date" tabindex="-1">21</span><span class="flatpickr-day"
                                            aria-label="June 22, 2025" tabindex="-1">22</span><span
                                            class="flatpickr-day" aria-label="June 23, 2025"
                                            tabindex="-1">23</span><span class="flatpickr-day"
                                            aria-label="June 24, 2025" tabindex="-1">24</span><span
                                            class="flatpickr-day" aria-label="June 25, 2025"
                                            tabindex="-1">25</span><span class="flatpickr-day"
                                            aria-label="June 26, 2025" tabindex="-1">26</span><span
                                            class="flatpickr-day" aria-label="June 27, 2025"
                                            tabindex="-1">27</span><span class="flatpickr-day"
                                            aria-label="June 28, 2025" tabindex="-1">28</span><span
                                            class="flatpickr-day" aria-label="June 29, 2025"
                                            tabindex="-1">29</span><span class="flatpickr-day"
                                            aria-label="June 30, 2025" tabindex="-1">30</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 1, 2025"
                                            tabindex="-1">1</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 2, 2025" tabindex="-1">2</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 3, 2025"
                                            tabindex="-1">3</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 4, 2025" tabindex="-1">4</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 5, 2025"
                                            tabindex="-1">5</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 6, 2025" tabindex="-1">6</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 7, 2025"
                                            tabindex="-1">7</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 8, 2025" tabindex="-1">8</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 9, 2025"
                                            tabindex="-1">9</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 10, 2025" tabindex="-1">10</span><span
                                            class="flatpickr-day nextMonthDay" aria-label="July 11, 2025"
                                            tabindex="-1">11</span><span class="flatpickr-day nextMonthDay"
                                            aria-label="July 12, 2025" tabindex="-1">12</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span
                    class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z"
                            fill=""></path>
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Kelas
            </label>
            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                <select
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                    :class="isOptionSelected & amp; & amp;
                    'text-gray-800 dark:text-white/90'"
                    @change="isOptionSelected = true">
                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        Ganjil
                    </option>
                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        Genap
                    </option>
                </select>
                <span
                    class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </div>
        </div>

        <!-- Elements -->
        <div class="flex justify-start gap-4 items-center">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Asal Sekolah
                </label>
                <input type="text" placeholder="Masukkan asal sekolah"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Kelas
                </label>
                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                    <select
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        :class="isOptionSelected & amp; & amp;
                        'text-gray-800 dark:text-white/90'"
                        @change="isOptionSelected = true">
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            A
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            B
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            1
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            2
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            3
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            4
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            5
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            6
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            7
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            8
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            9
                        </option>
                    </select>
                    <span
                        class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <div class="flex justify-start gap-4 items-center">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Program Bimbel
                </label>
                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                    <select
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        :class="isOptionSelected & amp; & amp;
                        'text-gray-800 dark:text-white/90'"
                        @change="isOptionSelected = true">
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Regular
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Private
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Community
                        </option>
                        <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                            Umum
                        </option>
                    </select>
                    <span
                        class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Minggu Ke-
            </label>
            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                <select
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                    :class="isOptionSelected & amp; & amp;
                    'text-gray-800 dark:text-white/90'"
                    @change="isOptionSelected = true">
                    <option value="1" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        1
                    </option>
                    <option value="2" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        2
                    </option>
                    <option value="3" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        3
                    </option>
                    <option value="4" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                        4
                    </option>
                </select>
                <span
                    class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </div>
        </div>

        <div x-data="{ mapelList: [{ mapel: '', nilai: '' }] }" class="space-y-4">
            <!-- Loop Mapel & Nilai -->
            <template x-for="(item, index) in mapelList" :key="index">
                <div class="w-full flex sm:flex-col md:flex-row items-center gap-4 my-6">
                    <!-- Mata Pelajaran -->
                    <div class="w-full md:w-1/2">
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Mata Pelajaran
                        </label>
                        <div class="relative z-20 bg-transparent">
                            <select x-model="item.mapel"
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                <option value="bhs_indonesia">Bahasa Indonesia</option>
                                <option value="matematika">Matematika</option>
                                <option value="ipa">IPA</option>
                                <option value="ips">IPS</option>
                                <option value="pendidikan pancasila">Pendidikan Pancasila</option>
                                <option value="senbud_prakarya">Seni Budaya & Prakarya</option>
                                <option value="pjok">PJOK</option>
                                <option value="bhs_inggris">Bahasa Inggris</option>
                                <option value="pai">PAI & Budi Pekerti</option>
                                <option value="alquran_hadist">Alquran Hadist</option>
                                <option value="aqidah_akhlak">Aqidah Akhlak</option>
                                <option value="fiqih">Fiqih</option>
                                <option value="ski">SKI</option>
                                <option value="bhs_arab">Bahasa Arab</option>
                            </select>
                            <span
                                class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Nilai -->
                    <div class="w-full md:w-1/3">
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Nilai
                        </label>
                        <input type="number" x-model="item.nilai" min="0" max="100"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:text-white/90 dark:placeholder:text-white/30"
                            placeholder="Masukkan nilai" />
                    </div>

                    <!-- Tombol Hapus -->
                    <div class="mt-6 md:mt-6">
                        <button type="button" @click="mapelList.splice(index, 1)" x-show="mapelList.length > 1"
                            style="padding: 0.5rem 0.75rem;border-radius: 0.375rem;border: 1px solid #FCA5A5;color: #EF4444;background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#FEF2F2'"
                            onmouseout="this.style.backgroundColor='transparent'">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </template>

            <div style="margin-top: 1rem; display: flex; justify-content: flex-end;">
                <button type="button" @click="mapelList.push({ mapel: '', nilai: '' })"
                    style="display: flex; align-items: center;gap: 0.5rem; padding: 0.5rem 1rem; border-radius: 0.375rem; border: 1px solid #465fff; background-color: transparent; color: #465fff; font-size: 0.875rem; line-height: 1.25rem; cursor: pointer;transition: background-color 0.2s ease;"
                    onmouseover="this.style.backgroundColor='rgba(70, 95, 255, 0.1)'"
                    onmouseout="this.style.backgroundColor='transparent'">
                    <svg style="width: 1.25rem; height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="#465fff">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Tambah Nilai</span>
                </button>
            </div>
        </div>
    </div>

    {{-- btn --}}
    <x-btn-form-nilai-smt />
    </div>
</form>
