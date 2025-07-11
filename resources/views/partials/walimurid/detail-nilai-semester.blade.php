@extends('layouts.app')

@section('title', 'Penilaian Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Siswa` }">
                <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
                    <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                        <ol class="flex items-center gap-1.5">
                            <p class="inline-flex items-center text-sm gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                                href="index.html">
                                Rekapitulasi data
                                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke=""
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
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
                    {{-- Form Filter --}}
                    <form method="GET" action="{{ route('detail-nilai-bulanan') }}"
                        class="flex flex-col md:flex-row gap-4 p-6 mb-6">
                        {{-- Hidden input id siswa --}}
                        <input type="hidden" name="id" value="{{ $siswa->id }}">

                        {{-- Tahun Ajaran --}}
                        <div class="flex flex-col sm:flex-row gap-4 w-full">
                            {{-- Tahun Ajaran --}}
                            <div class="flex-1">
                                <label for="tahun_ajar"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Tahun Ajaran
                                </label>
                                <select name="tahun_ajar" id="tahun_ajar"
                                    class="block w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                                    <option value="">Semua</option>
                                    @foreach ($groupedRaportsFormatted->pluck('tahun_ajar')->unique() as $tahun)
                                        <option value="{{ $tahun }}"
                                            {{ request('tahun_ajar') == $tahun ? 'selected' : '' }}>
                                            {{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Semester --}}
                            <div class="flex-1">
                                <label for="semester"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Semester
                                </label>
                                <select name="semester" id="semester"
                                    class="block w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                                    <option value="">Semua</option>
                                    @foreach ($groupedRaportsFormatted->pluck('semester')->unique() as $sem)
                                        <option value="{{ $sem }}"
                                            {{ request('semester') == $sem ? 'selected' : '' }}>
                                            {{ ucfirst($sem) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tombol Submit --}}
                            <div class="flex items-end">
                                <button type="submit"
                                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-500 hover:bg-brand-600 text-white font-semibold shadow transition focus:outline-none focus:ring-2 focus:ring-brand-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 17l4 4 4-4m-4-5v9" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 12a8 8 0 10-16 0 8 8 0 0016 0z" />
                                    </svg>
                                    Tampilkan
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- Kartu Hasil --}}
                    <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4 px-6 mb-6 md:px-6 rounded-lg">
                        @forelse ($groupedRaportsFormatted as $group)
                            {{-- Filter manual di Blade --}}
                            @if (
                                (!request('tahun_ajar') || $group['tahun_ajar'] == request('tahun_ajar')) &&
                                    (!request('semester') || $group['semester'] == request('semester')))
                                <div class="flex flex-col w-full">
                                    <a href="{{ route('raport-semester', ['id' => $group['id_siswa'], 'bulan' => $group['bulan'], 'semester' => $group['semester']]) }}"
                                        class="shadow-md hover:shadow-lg transition-shadow duration-200 flex flex-col sm:flex-row p-4 sm:p-6 rounded-lg items-center sm:items-start gap-4 sm:gap-6 group"
                                        style=" border: 1px solid #d1d5db;">

                                        {{-- Gambar --}}
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('images/b-3.jpg') }}" alt="Bulan {{ $group['bulan'] }}"
                                                style="width:120px; height: 120px; border-radius: 20px; margin-right: 20px;" />
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="text-lg font-semibold text-gray-800" style="margin-top: 12px">Bulan
                                                {{ $group['bulan'] }}
                                            </h2>
                                            <p class="text-sm text-gray-600">Evaluasi siswa bulan
                                                Evaluasi siswa bulan {{ $group['bulan'] }} tahun
                                                {{ $group['tahun_ajar'] }}.
                                            </p>
                                            <p class="text-brand-500 hover:text-brand-600 dark:text-brand-400"
                                                style="margin-top: 24px">
                                                Klik untuk melihat
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @empty
                            <div class="col-span-full text-center text-gray-500 mt-6">
                                Tidak ada data raport bulanan.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
