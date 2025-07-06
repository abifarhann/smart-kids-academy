<!-- Breadcrumb Start -->
<div x-data="{ pageName: `{{ isset($mentor) ? 'Edit Data Mentor' : 'Tambah Data Tentor' }}` }">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
        <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
            <ol class="flex items-center gap-1.5 text-sm">
                <!-- Rekapitulasi Data -->
                <p class="flex items-center text-sm gap-1.5 text-gray-500 dark:text-gray-400">
                    Rekapitulasi Data
                    <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </p>

                <!-- Mentor -->
                <li>
                    <a href="{{ route('data-mentor') }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Mentor
                        <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>

                <!-- Tambah Data Mentor -->
                <li class="text-gray-800 dark:text-white/90" x-text="pageName"></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->


{{-- Data Mentor --}}
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <div class="px-5 py-4 sm:px-6 sm:py-5">
        <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
            Profil Tentor
        </h3>
    </div>
    <form action="{{ isset($mentor) ? route('update-data-mentor', $mentor->id) : route('store-data-mentor') }}"
        method="POST">
        @csrf
        @if (isset($mentor))
            @method('PUT')
        @endif
        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
            <!-- Elements -->
            <div class="flex justify-start gap-4 items-center">
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Nama Lengkap
                    </label>
                    <input type="text" placeholder="Masukkan nama mentor" name="nama"
                        value="{{ isset($mentor) ? $mentor->nama : '' }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>

                {{-- tgl lahir --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Tanggal
                        Lahir</label>
                    <input type="date" name="tgl_lahir" required onclick="this.showPicker()"
                        value="{{ isset($mentor) && $mentor->tgl_lahir ? \Carbon\Carbon::parse($mentor->tgl_lahir)->format('Y-m-d') : '' }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>

                {{-- kota lahir --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Tempat Lahir
                    </label>
                    <input type="text" placeholder="Kota kelahiran" name="tempat_lahir"
                        value="{{ isset($mentor) ? $mentor->tempat_lahir : '' }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>

                <!-- Tanggal Mulai Mengajar -->
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Tanggal Mulai
                        Mengajar</label>
                    <input type="date" name="start_date" onclick="this.showPicker()"
                        value="{{ isset($mentor) && $mentor->start_date ? \Carbon\Carbon::parse($mentor->start_date)->format('Y-m-d') : '' }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
            </div>


            {{-- jenis kelamin --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Jenis Kelamin</label>
                <select name="jenis_kelamin"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="" selected disabled>Pilih jenis kelamin</option>
                    <option value="Laki-Laki"
                        {{ isset($mentor) && $mentor->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                    </option>
                    <option value="Perempuan"
                        {{ isset($mentor) && $mentor->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>

            {{-- no hp --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Nomor WhatsApp
                </label>
                <input type="number" placeholder="Masukkan nomor whatsapp" name="phone"
                    value="{{ isset($mentor) ? $mentor->phone : '' }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            {{-- alamat --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Alamat
                </label>
                <textarea placeholder="Alamat tempat tinggal" type="text" rows="6" name="alamat"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">{{ isset($mentor) ? $mentor->alamat : '' }}</textarea>
            </div>

            <!-- Tingkat Pendidikan -->
            <div>
                <label for="id_tingkat_pendidikan"
                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Tingkat Pendidikan
                </label>
                <select name="id_tingkat_pendidikan" id="id_tingkat_pendidikan"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">
                    <option value="" disabled
                        {{ old('id_tingkat_pendidikan', $mentor->id_tingkat_pendidikan ?? '') == '' ? 'selected' : '' }}>
                        Pilih tingkat pendidikan
                    </option>
                    @foreach ($tingkatPendidikan as $id => $nama)
                        <option value="{{ $id }}"
                            {{ old('id_tingkat_pendidikan', $mentor->id_tingkat_pendidikan ?? '') == $id ? 'selected' : '' }}>
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
                    Jurusan
                </label>
                <input type="text" placeholder="Masukkan jurusan" name="jurusan"
                    value="{{ isset($mentor) ? $mentor->jurusan : '' }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <!-- Prodi -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Prodi</label>
                <input type="text" name="prodi" placeholder="Masukkan program studi"
                    value="{{ isset($mentor) ? $mentor->prodi : '' }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <!-- Asal Sekolah -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Asal Sekolah/Perguruan
                    Tinggi</label>
                <input type="text" name="asal_sekolah" placeholder="Masukkan asal sekolah"
                    value="{{ isset($mentor) ? $mentor->asal_sekolah : '' }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <!-- Status Pendidikan -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Status
                    Pendidikan</label>
                <select name="status_pendidikan"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="" disabled selected>Pilih status pendidikan</option>
                    <option value="Aktif"
                        {{ isset($mentor) && $mentor->status_pendidikan == 'Aktif' ? 'selected' : '' }}>Aktif
                    </option>
                    <option value="Lulus"
                        {{ isset($mentor) && $mentor->status_pendidikan == 'Lulus' ? 'selected' : '' }}>Lulus
                    </option>
                </select>
            </div>

            <!-- Program Ajar -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Program Ajar</label>
                <select name="id_program"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="" disabled selected>Pilih program ajar</option>
                    <option value="1" {{ isset($mentor) && $mentor->id_program == '1' ? 'selected' : '' }}>
                        Privat</option>
                    <option value="2" {{ isset($mentor) && $mentor->id_program == '2' ? 'selected' : '' }}>
                        Kelompok</option>
                    <option value="3" {{ isset($mentor) && $mentor->id_program == '3' ? 'selected' : '' }}>
                        Community</option>
                    <option value="4" {{ isset($mentor) && $mentor->id_program == '4' ? 'selected' : '' }}>Umum
                    </option>
                </select>
            </div>

            <!-- Status Ajar -->
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Status Ajar</label>
                <select name="status"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="" disabled selected>Pilih status ajar</option>
                    <option value="1" {{ isset($mentor) && $mentor->status == '1' ? 'selected' : '' }}>Aktif
                    </option>
                    <option value="0" {{ isset($mentor) && $mentor->status == '0' ? 'selected' : '' }}>Nonaktif
                    </option>
                </select>
            </div>

            {{-- button --}}
            <x-btn-form-mentor class="mt-6" />
        </div>
    </form>
</div>
