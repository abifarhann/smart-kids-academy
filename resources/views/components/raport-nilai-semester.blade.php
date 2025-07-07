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
        <div x-data="{ pageName: `Raport Bulanan Siswa` }">
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
                            <a href="{{ route('raport-semester') }}"
                                class="flex items-center gap-1.5 text-gray-500 hover:text-blue-600 transition dark:text-gray-400 dark:hover:text-blue-400">
                                Evaluasi Semester
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


    <div class="container mx-auto py-8">
        <h2 class="text-xl font-bold mb-4">
            Preview Raport Semester {{ $semester }} Tahun Ajaran {{ $tahunAjar }}
        </h2>

        <iframe src="data:application/pdf;base64,{{ $base64Pdf }}" width="100%" height="800px"
            style="border: 1px solid #ccc;">
        </iframe>
    </div>
</div>
