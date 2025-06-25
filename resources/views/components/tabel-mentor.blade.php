<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <!-- Breadcrumb Start -->
    <div x-data="{ pageName: `Mentor` }">
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
            <nav>
                <ol class="flex items-center gap-1.5">
                    <li>
                        <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                            href="index.html">
                            Rekapitulasi data
                            <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke=""
                                    stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
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
                        Data Mentor
                    </h3>
                </div>

                {{-- Button add data --}}
                <x-btn-add-data-mentor />
            </div>


            <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <!-- Table Four -->
                <div
                    class="overflow-hidden rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="flex flex-col gap-5 px-6 mb-4 sm:flex-row sm:items-center sm:justify-between">

                        {{-- jumlah data entries --}}
                        <div class="flex items-center gap-3">
                            <span class="text-gray-500 dark:text-gray-400"> Show </span>
                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                                <div x-data="{ isOptionSelected: false }" class="relative z-20 w-32">
                                    <select
                                        class="dark:bg-dark-900 h-9 w-full appearance-none rounded-lg border border-gray-300 bg-transparent py-2 pl-2 pr-10 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
                                        :class="isOptionSelected ? 'text-gray-800 dark:text-white/90' :
                                            'text-gray-500 dark:text-gray-400'"
                                        @change="isOptionSelected = true; perPage = $event.target.value">
                                        <option value="Semua">Semua</option>
                                        <option value="8">8</option>
                                        <option value="5">5</option>
                                    </select>

                                    <span
                                        class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                        <svg class="stroke-current" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.8335 5.9165L8.00016 10.0832L12.1668 5.9165"
                                                stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>

                            </div>
                            <span class="text-gray-500 dark:text-gray-400"> entries </span>
                        </div>

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
                                                Tanggal Lahir
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Tempat Lahir
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Alamat
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
                                                Nomor Telepon
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Tingkat Pendidikan/Kelas
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Jurusan
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Asal Sekolah/Perguruan Tinggi
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Status Pendidikan
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Program Ajar
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Status Ajar
                                            </p>
                                        </div>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center justify-center">
                                            <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                Aksi
                                            </p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- table header end -->

                            <!-- table body start -->
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800 transition-colors">
                                @foreach ($dataMentor as $mentor)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                                        {{-- Nama --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <span
                                                        class="text-theme-sm mb-0.5 block font-regular text-gray-700 dark:text-gray-400">
                                                        {{ $mentor->nama }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Tgl Lahir --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div
                                                style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                    {{ \Carbon\Carbon::parse($mentor->tgl_lahir)->format('d-m-Y') }}
                                                </span>
                                            </div>
                                        </td>

                                        {{-- Tempat Lahir --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                {{ $mentor->tempat_lahir }}
                                            </span>
                                        </td>

                                        {{-- Alamat --}}
                                        <td class="px-6 py-3 whitespace-nowrap" title="{{ $mentor->alamat }}">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400"
                                                style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {{ $mentor->alamat }}
                                            </span>
                                        </td>

                                        {{-- Jenis Kelamin --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                {{ $mentor->jenis_kelamin }}
                                            </span>
                                        </td>

                                        {{-- Nomor WhatsApp --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <a href="{{ whatsappUrl($mentor->phone) }}" target="_blank"
                                                class="text-theme-sm text-blue-600 underline">
                                                {{ $mentor->phone }}
                                            </a>
                                        </td>

                                        {{-- Tingkat Pendidikan --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                {{ $mentor->tingkat_pendidikan }}
                                            </span>
                                        </td>

                                        {{-- Jurusan --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                {{ $mentor->jurusan }}
                                            </span>
                                        </td>

                                        {{-- Asal Sekolah --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <div
                                                style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                    {{ $mentor->asal_sekolah }}
                                                </span>

                                            </div>
                                        </td>

                                        {{-- Status Pendidikan --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            @if ($mentor->status_pendidikan === 'Aktif')
                                                <p
                                                    class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-theme-xs font-medium">
                                                    Aktif
                                                </p>
                                            @else
                                                <p
                                                    class="bg-red-500 text-red-600 dark:bg-red-500/10 dark:text-red-500 rounded-full px-2 py-0.5 text-theme-xs font-medium">
                                                    Lulus
                                                </p>
                                            @endif
                                        </td>

                                        {{-- Program --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            <span class="text-theme-sm text-gray-700 dark:text-gray-400">
                                                {{ $mentor->program->nama_program ?? 'Tidak ada program' }}
                                            </span>
                                        </td>

                                        {{-- Status Ajar --}}
                                        <td class="px-6 py-3 whitespace-nowrap">
                                            @if ($mentor->status === 'Aktif')
                                                <p
                                                    class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-theme-xs font-medium">
                                                    Aktif
                                                </p>
                                            @else
                                                <p
                                                    class="bg-red-50 text-red-600 dark:bg-red-500/10 dark:text-red-500 rounded-full px-2 py-0.5 text-theme-xs font-medium">
                                                    Nonaktif
                                                </p>
                                            @endif
                                        </td>

                                        {{-- Aksi --}}
                                        <td class="px-6 py-3 whitespace-nowrap flex items-center justify-center gap-3">
                                            <x-btn-aksi-mentor :mentor="$mentor" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <!-- table body end -->
                        </table>
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
