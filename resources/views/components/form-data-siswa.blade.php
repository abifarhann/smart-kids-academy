<!-- Breadcrumb Start -->
<div x-data="{ pageName: `{{ isset($siswa) ? 'Edit Data Siswa' : 'Tambah Data Siswa' }}` }">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
        <nav>
            <ol class="flex items-center gap-1.5 text-sm">
                <!-- Rekapitulasi Data -->
                <li>
                    <a href="index.html" class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Rekapitulasi Data
                        <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>

                <!-- Siswa -->
                <li>
                    <a href="{{ route('data-siswa') }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Siswa
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
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Profil Siswa
        </h3>
    </div>

    <form action="{{ isset($siswa) ? route('update-data-siswa', $siswa->id) : route('store-data-siswa') }}"
        method="POST">
        @csrf
        @if (isset($siswa))
            @method('PUT')
        @endif
        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
            <!-- Baris 1 -->
            <div class="flex justify-start gap-4 items-center">
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Nama Siswa
                    </label>
                    <input type="text" name="nama" placeholder="Masukkan nama siswa"
                        value="{{ old('nama', $siswa->nama ?? '') }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>

                <div>
                    <label for="tgl_lahir" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Tanggal Lahir
                    </label>
                    <div class="relative">
                        <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Pilih tanggal"
                            value="{{ old('tgl_lahir', isset($siswa) ? \Carbon\Carbon::parse($siswa->tgl_lahir)->format('Y-m-d') : '') }}"
                            class="w-full h-11 px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 bg-transparent dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 rounded-lg border border-gray-300 dark:border-gray-700 shadow-theme-xs focus:border-brand-300 dark:focus:border-brand-800 focus:ring-3 focus:ring-brand-500/10 focus:outline-none dark:bg-dark-900"
                            aria-describedby="tgl_lahir_help" onclick="this.showPicker()">
                    </div>
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Tempat Lahir
                    </label>
                    <input type="text" name="tempat_lahir" placeholder="Kota kelahiran"
                        value="{{ old('tempat_lahir', $siswa->tempat_lahir ?? '') }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option value="Laki-laki"
                            {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-Laki</option>
                        <option value="Perempuan"
                            {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan</option>
                    </select>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="flex justify-start gap-4 items-center">
                <div>
                    <label for="id_user" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Nama Wali
                    </label>
                    <select name="id_user" id="id_user"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                        <option value="" disabled
                            {{ old('id_user', $siswa->id_user ?? '') == '' ? 'selected' : '' }}>
                            Pilih Wali
                        </option>
                        @foreach ($dataWali as $id => $nama)
                            <option value="{{ $id }}"
                                {{ old('id_user', $siswa->id_user ?? '') == $id ? 'selected' : '' }}>
                                {{ $nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_user')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Nomor WA
                    </label>
                    <input type="number" name="phone" placeholder="Masukkan nomor WA"
                        value="{{ old('phone', $siswa->phone ?? '') }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                </div>

                <div>
                    <label for="tgl_mulai" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Tanggal Mulai
                    </label>
                    <div class="relative">
                        <input type="date" id="tgl_mulai" name="tgl_mulai" placeholder="Pilih tanggal"
                            value="{{ old('tgl_mulai', isset($siswa) ? \Carbon\Carbon::parse($siswa->tgl_mulai)->format('Y-m-d') : '') }}"
                            class="w-full h-11 px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 bg-transparent dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 rounded-lg border border-gray-300 dark:border-gray-700 shadow-theme-xs focus:border-brand-300 dark:focus:border-brand-800 focus:ring-3 focus:ring-brand-500/10 focus:outline-none dark:bg-dark-900"
                            aria-describedby="tgl_mulai_help" onclick="this.showPicker()">
                    </div>
                </div>
            </div>

            <!-- Baris 3 -->
            <div class="flex justify-start gap-4 items-center">
                <div>
                    <label for="id_tingkat_pendidikan" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Tingkat Pendidikan
                    </label>
                    <select name="id_tingkat_pendidikan" id="id_tingkat_pendidikan"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                        <option value="" disabled
                            {{ old('id_tingkat_pendidikan', $siswa->id_tingkat_pendidikan ?? '') == '' ? 'selected' : '' }}>
                            Pilih tingkat pendidikan
                        </option>
                        @foreach ($tingkatPendidikan as $id => $nama)
                            <option value="{{ $id }}"
                                {{ old('id_tingkat_pendidikan', $siswa->id_tingkat_pendidikan ?? '') == $id ? 'selected' : '' }}>
                                {{ $nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_tingkat_pendidikan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Asal Sekolah
                    </label>
                    <input type="text" name="asal_sekolah" placeholder="Masukkan asal sekolah"
                        value="{{ old('asal_sekolah', $siswa->asal_sekolah ?? '') }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                </div>

                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Kelas
                    </label>
                    <select name="kelas"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                        <option value="" disabled selected>Pilih kelas</option>
                        <option value="A" {{ old('kelas', $siswa->kelas ?? '') == 'A' ? 'selected' : '' }}>A
                        </option>
                        <option value="B" {{ old('kelas', $siswa->kelas ?? '') == 'B' ? 'selected' : '' }}>B
                        </option>
                        <option value="1" {{ old('kelas', $siswa->kelas ?? '') == '1' ? 'selected' : '' }}>1
                        </option>
                        <option value="2" {{ old('kelas', $siswa->kelas ?? '') == '2' ? 'selected' : '' }}>2
                        </option>
                        <option value="3" {{ old('kelas', $siswa->kelas ?? '') == '3' ? 'selected' : '' }}>3
                        </option>
                        <option value="4" {{ old('kelas', $siswa->kelas ?? '') == '4' ? 'selected' : '' }}>4
                        </option>
                        <option value="5" {{ old('kelas', $siswa->kelas ?? '') == '5' ? 'selected' : '' }}>5
                        </option>
                        <option value="6" {{ old('kelas', $siswa->kelas ?? '') == '6' ? 'selected' : '' }}>6
                        </option>
                        <option value="7" {{ old('kelas', $siswa->kelas ?? '') == '7' ? 'selected' : '' }}>7
                        </option>
                        <option value="8" {{ old('kelas', $siswa->kelas ?? '') == '8' ? 'selected' : '' }}>8
                        </option>
                        <option value="9" {{ old('kelas', $siswa->kelas ?? '') == '9' ? 'selected' : '' }}>9
                        </option>
                    </select>
                </div>
            </div>

            <!-- Alamat -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Alamat
                </label>
                <textarea name="alamat" rows="6" placeholder="Alamat tempat tinggal"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">{{ old('alamat', $siswa->alamat ?? '') }}</textarea>
            </div>

            <!-- Baris 4 -->
            <div class="flex justify-start gap-4 items-center">
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Program Bimbel
                    </label>
                    <select name="id_program"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                        <option value="" disabled selected>Pilih program</option>
                        <option value="1"
                            {{ old('id_program', $siswa->id_program ?? '') == '1' ? 'selected' : '' }}>Private</option>
                        <option value="2"
                            {{ old('id_program', $siswa->id_program ?? '') == '2' ? 'selected' : '' }}>Kelompok
                        </option>
                        <option value="3"
                            {{ old('id_program', $siswa->id_program ?? '') == '3' ? 'selected' : '' }}>Community
                        </option>
                        <option value="4"
                            {{ old('id_program', $siswa->id_program ?? '') == '4' ? 'selected' : '' }}>Umum</option>
                    </select>
                </div>

                @if (isset($siswa))
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Status Keaktifan
                        </label>
                        <select name="status"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                            <option value="" disabled
                                {{ old('status', $siswa->status ?? '') == '' ? 'selected' : '' }}>
                                Pilih status
                            </option>
                            <option value="1" {{ old('status', $siswa->status ?? '') == '1' ? 'selected' : '' }}>
                                Aktif</option>
                            <option value="0" {{ old('status', $siswa->status ?? '') == '0' ? 'selected' : '' }}>
                                Nonaktif</option>
                        </select>
                    </div>
                @endif
            </div>

            <!-- Tombol Submit Biasa -->
            <div class="pt-4 text-right">
                <button type="button"
                    onclick="setTimeout(() => window.location.href = '{{ route('data-siswa') }}', 1000);"
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
                    {{ isset($siswa) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </div>
    </form>

</div>
