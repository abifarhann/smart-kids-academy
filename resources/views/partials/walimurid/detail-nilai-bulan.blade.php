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
                                    <thead
                                        class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                        <tr>
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
                                                        Tahun ajaran
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

                                            @foreach ($mapelList as $namaMapel)
                                                <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <p
                                                            class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                            {{ $namaMapel }}
                                                        </p>
                                                    </div>
                                                </th>
                                            @endforeach

                                            <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Rata-rata
                                                    </p>
                                                </div>
                                            </th>
                                            <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Unduh
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>


                                    <!-- table header end -->

                                    <!-- table body start -->
                                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                        @php
                                            use Illuminate\Support\Carbon;

                                            // Group by bulan + semester
                                            $groupedRaports = $raports->groupBy(function ($item) {
                                                return Carbon::parse($item->tanggal_penilaian)->format('F') .
                                                    '-' .
                                                    $item->semester;
                                            });
                                        @endphp

                                        @foreach ($groupedRaports as $key => $group)
                                            @php
                                                [$bulanFormatted, $semester] = explode('-', $key);
                                                $tahunAjar = $group->first()?->tahun_ajar ?? '-';
                                                $nilaiList = []; // kumpulkan nilai numerik
                                            @endphp
                                            <tr>
                                                <td class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="truncate max-w-[400px]">
                                                            <span
                                                                class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                                {{ $bulanFormatted }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="truncate max-w-[400px]">
                                                            <span
                                                                class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                                {{ $tahunAjar }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="truncate max-w-[400px]">
                                                            <span
                                                                class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                                {{ $semester }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                @foreach ($mapelList as $namaMapel)
                                                    @php
                                                        $nilai = $group->firstWhere('mapel.nama', $namaMapel)?->nilai;
                                                        if (is_numeric($nilai)) {
                                                            $nilaiList[] = $nilai;
                                                        }
                                                    @endphp
                                                    <td class="px-6 py-3 whitespace-nowrap text-center">
                                                        <span
                                                            class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                                            {{ is_null($nilai) ? '-' : $nilai }}
                                                        </span>
                                                    </td>
                                                @endforeach

                                                @php
                                                    $rata2 =
                                                        count($nilaiList) > 0
                                                            ? number_format(
                                                                array_sum($nilaiList) / count($nilaiList),
                                                                2,
                                                            )
                                                            : '-';
                                                @endphp
                                                <td class="px-6 py-3 whitespace-nowrap text-center">
                                                    <span
                                                        class="text-theme-sm font-regular text-gray-700 dark:text-gray-400">
                                                        {{ $rata2 }}
                                                    </span>
                                                </td>

                                                <td class="px-6 py-3 whitespace-nowrap text-center">
                                                    <a href="{{ route('raport-bulanan', ['id' => $group->first()->id_siswa, 'bulan' => $bulanFormatted, 'semester' => $semester]) }}"
                                                        class="text-blue-600 hover:underline text-theme-sm">Unduh</a>
                                                </td>
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

    </div>
@endsection
