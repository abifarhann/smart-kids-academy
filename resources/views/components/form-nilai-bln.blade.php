<!-- Breadcrumb Start -->
<div x-data="{ pageName: `Tambah Rekap Nilai` }">
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
                    <a href="{{ url()->previous() }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Nilai
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
<form method="POST" action="{{ isset($groupId) ? route('update-nilai', $groupId) : route('store-nilai') }}"
    class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    @csrf
    @if (isset($groupId))
        @method('PUT')
    @endif

    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">Input Nilai</h3>
    </div>

    <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
        <div class="flex justify-start gap-4 flex-wrap">
            {{-- Nama Siswa --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Nama Siswa</label>
                <select id="siswa" name="id_siswa"
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                    <option value="" disabled {{ !isset($nilai) ? 'selected' : '' }}>Pilih Siswa</option>
                    @foreach ($dataSiswa as $siswa)
                        <option value="{{ $siswa->id }}"
                            {{ isset($nilai) && $nilai->first()->id_siswa == $siswa->id ? 'selected' : '' }}
                            data-tingkat="{{ $siswa->id_tingkat_pendidikan }}">
                            {{ $siswa->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Semester --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Semester</label>
                <select name="semester" required
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                    <option value="Ganjil"
                        {{ isset($nilai) && $nilai->first()->semester == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                    <option value="Genap"
                        {{ isset($nilai) && $nilai->first()->semester == 'Genap' ? 'selected' : '' }}>Genap</option>
                </select>
            </div>

            {{-- Tahun Ajar --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Tahun Ajaran</label>
                <input name="tahun_ajar" type="text" placeholder="2024/2025" required
                    value="{{ isset($nilai) ? $nilai->first()->tahun_ajar : '' }}"
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 placeholder:text-gray-400 dark:placeholder:text-white/30" />
            </div>

            {{-- Bulan Penilaian --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Bulan Penilaian</label>
                <input name="tanggal_penilaian" type="month" id="tanggal_penilaian" required
                    value="{{ isset($nilai) && $nilai->first()->tanggal_penilaian ? \Carbon\Carbon::parse($nilai->first()->tanggal_penilaian)->format('Y-m') : '' }}"
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 placeholder:text-gray-400 dark:placeholder:text-white/30" />
            </div>

            {{-- Nama Mentor --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Nama Mentor</label>
                <select id="mentor" name="id_mentor"
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                    <option value="" disabled {{ isset($nilai) ? '' : 'selected' }}>Pilih Mentor</option>
                    @foreach ($dataMentor as $mentor)
                        <option value="{{ $mentor->id }}" @if (isset($nilai) && $nilai->first()->id_mentor == $mentor->id) selected @endif>
                            {{ $mentor->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex justify-start gap-4 flex-wrap">
            {{-- Jenis Nilai --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Jenis Nilai</label>
                <select name="jenis_nilai" required
                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                    <option value="Bulanan"
                        {{ isset($nilai) && $nilai->first()->jenis_nilai == 'Bulanan' ? 'selected' : '' }}>Bulanan
                    </option>
                    <option value="Semester"
                        {{ isset($nilai) && $nilai->first()->jenis_nilai == 'Semester' ? 'selected' : '' }}>Semester
                    </option>
                </select>
            </div>

            {{-- Saran --}}
            <div class="w-full">
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Saran</label>
                <textarea name="saran" rows="3" placeholder="Berikan saran atau komentar..."
                    class="dark:bg-dark-900 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 placeholder:text-gray-400 dark:placeholder:text-white/30">{{ isset($nilai) ? $nilai->first()->saran : '' }}</textarea>
            </div>
        </div>


        @php
            $nilaiMapelArray = [];
            if (isset($nilai)) {
                foreach ($nilai as $item) {
                    $nilaiMapelArray[] = [
                        'mapel' => $item->id_mapel,
                        'nilai' => $item->nilai,
                    ];
                }
            }
        @endphp
        {{-- Note edit Mapel --}}
        <p class="text-sm text-error-500 font-light">Catatan: Mapel tidak bisa diedit.</p>
        {{-- Mapel & Nilai --}}
        <div x-data="nilaiForm()" x-init="@if (isset($nilaiMapelArray) && count($nilaiMapelArray) > 0) mapelList = [];
                @foreach ($nilaiMapelArray as $item)
                mapelList.push({
                    mapel: '{{ $item['mapel'] }}',
                    nilai: '{{ $item['nilai'] }}',
                    options: [{ id: '{{ $item['mapel'] }}', nama: '{{ \App\Models\Mapel::find($item['mapel'])->nama ?? '' }}' }]
                });
                @endforeach
                tingkatPendidikanId = document.getElementById('siswa').selectedOptions[0]?.getAttribute('data-tingkat');
            @else
                init(); @endif" class="space-y-4">
            <template x-for="(item, index) in mapelList" :key="index">
                <div class="w-full flex sm:flex-col md:flex-row items-center gap-4 my-6">
                    {{-- Mata Pelajaran --}}
                    <div class="w-full md:w-1/2">
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Mata
                            Pelajaran</label>
                        <select x-model="item.mapel" :name="'mapel_id[]'"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                            <option value="">Pilih Mapel</option>
                            <template x-for="option in item.options" :key="option.id">
                                <option :value="option.id" :selected="item.mapel == option.id" x-text="option.nama">
                                </option>
                            </template>
                        </select>
                    </div>

                    {{-- Nilai --}}
                    <div class="w-full md:w-1/3">
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Nilai</label>
                        <input type="number" :name="'nilai[]'" x-model="item.nilai" min="0" max="100"
                            class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 placeholder:text-gray-400 dark:placeholder:text-white/30"
                            placeholder="Masukkan nilai" />
                    </div>

                    {{-- Hapus --}}
                    <div class="mt-6 md:mt-6">
                        <template x-if="!{{ isset($nilai) ? 'true' : 'false' }}">
                            <button type="button" @click="mapelList.splice(index, 1)" x-show="mapelList.length > 1"
                                class="text-red-500 border border-red-300 px-2 py-1 rounded hover:bg-red-50">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </template>
                    </div>
                </div>
            </template>

            <div class="flex justify-end">
                <template x-if="!{{ isset($nilai) ? 'true' : 'false' }}">
                    <button type="button" @click="addRow()"
                        class="text-blue-600 border border-blue-500 px-4 py-2 rounded hover:bg-blue-50">
                        + Tambah Nilai
                    </button>
                </template>
            </div>
        </div>
    </div>

    <!-- Tombol Submit Biasa -->
    <div class="pt-4 text-right">
        <button type="button"
            onclick="setTimeout(() => window.location.href = '{{ route('nilai-bulanan') }}', 1000);"
            style=" display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.5rem 1rem; border-radius: 0.5rem; border: 1px solid #ef4444; font-size: 0.875rem; font-weight: 500; color: #dc2626; background-color: transparent; transition: background-color 0.2s, color 0.2s, border-color 0.2s;"
            onmouseover="this.style.backgroundColor='#fef2f2'; this.style.color='#b91c1c';"
            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#dc2626';"
            onfocus="this.style.outline='2px solid #ef4444'; this.style.outlineOffset='2px';"
            onblur="this.style.outline='none';"
            class="text-red-600 hover:bg-red-50  dark:text-red-400 dark:hover:bg-red-600/10 dark:focus:ring-red-400">
            Batal
        </button>
        <button type="submit"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white shadow hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:bg-brand-500 dark:hover:bg-brand-600 dark:focus:ring-brand-400">
            {{ isset($nilai) ? 'Update' : 'Simpan' }}
        </button>
    </div>
</form>


<script>
    function nilaiForm() {
        return {
            tingkatPendidikanId: null,
            mapelList: [{
                mapel: '',
                nilai: '',
                options: []
            }],

            init() {
                // Tangkap ID tingkat pendidikan saat siswa dipilih
                document.getElementById('siswa').addEventListener('change', async (e) => {
                    const selectedOption = e.target.options[e.target.selectedIndex];
                    this.tingkatPendidikanId = selectedOption.getAttribute('data-tingkat');

                    if (this.tingkatPendidikanId) {
                        const data = await this.fetchMapel(this.tingkatPendidikanId);

                        // Update semua item yang ada dengan mapel
                        this.mapelList = this.mapelList.map(item => ({
                            ...item,
                            options: data
                        }));
                    }
                });
            },

            async fetchMapel(idTingkat) {
                const res = await fetch(`/get-mapel-by-tingkat/${idTingkat}`);
                return await res.json();
            },

            async addRow() {
                let options = [];

                if (this.tingkatPendidikanId) {
                    options = await this.fetchMapel(this.tingkatPendidikanId);
                }

                this.mapelList.push({
                    mapel: '',
                    nilai: '',
                    options
                });
            }
        }
    }
</script>
