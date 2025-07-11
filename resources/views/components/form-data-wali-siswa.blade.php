<!-- Breadcrumb Start -->
<div x-data="{ pageName: `{{ isset($wali) ? 'Update Akun Wali Siswa' : 'Tambah Akun Wali Siswa' }}` }">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
        <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
            <ol class="flex items-center gap-1.5 text-sm">
                <!-- Akun Wali Siswa -->
                <p class="flex items-center text-sm gap-1.5 text-gray-500 dark:text-gray-400">
                    Akun Wali Siswa
                    <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </p>

                <!-- Wali Siswa -->
                <li>
                    <a href="{{ route('akun-wali-siswa') }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Autentifikasi
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
    <form method="POST" action="{{ isset($wali) ? route('update-data-wali', $wali->id) : route('store-data-wali') }}">
        <!-- Ganti "/your-action-url" dengan URL tujuan pengiriman data -->
        @csrf
        @if (isset($wali))
            @method('PUT')
        @endif

        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Nama Wali Siswa
                </label>
                <input type="text" placeholder="Masukkan nama siswa" name="name"
                    value="{{ old('name', $wali->name ?? '') }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Username
                </label>
                <input type="text" placeholder="Masukkan username" name="username"
                    value="{{ old('username', $wali->username ?? '') }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <!-- Password -->
            <div x-data="{ showPassword1: false }" class="relative mb-4">
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Password
                </label>
                <input :type="showPassword1 ? 'text' : 'password'" name="password" placeholder="Masukkan password"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                <span @click="showPassword1 = !showPassword1"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400" style="margin-top: 12px;">
                    <!-- Mata tertutup -->
                    <svg x-show="!showPassword1" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 4.043c-3.518 0-6.505 2.266-7.585 5.416a1.008 1.008 0 000 .943c1.08 3.15 4.067 5.417 7.585 5.417s6.505-2.267 7.585-5.417a1.008 1.008 0 000-.943C16.505 6.309 13.518 4.043 10 4.043zM10 13.862c-2.767 0-5.132-1.725-6.077-4.16C4.868 7.267 7.233 5.543 10 5.543s5.132 1.724 6.077 4.16c-.945 2.435-3.31 4.159-6.077 4.159z" />
                        <path d="M10 7.844a1.86 1.86 0 100 3.718A1.86 1.86 0 0010 7.844z" />
                    </svg>
                    <!-- Mata terbuka -->
                    <svg x-show="showPassword1" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.638 3.577a.833.833 0 00-1.06 1.06L4.853 5.914a8.323 8.323 0 00-2.438 3.545.833.833 0 000 .943c1.08 3.15 4.067 5.416 7.585 5.416 1.255 0 2.442-.288 3.5-.802l1.863 1.864a.833.833 0 001.179-1.178L4.638 3.577zM10 13.862c-.47 0-.93-.056-1.36-.16l-1.716-1.715A1.86 1.86 0 0010 11.561h.015c1.027 0 1.859-.832 1.859-1.859 0-.45-.162-.862-.429-1.178l1.537 1.537c-.665.875-1.653 1.5-2.982 1.5z" />
                    </svg>
                </span>
            </div>

            <!-- Konfirmasi Password -->
            <div x-data="{ showPassword2: false }" class="relative">
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Konfirmasi Password
                </label>
                <input :type="showPassword2 ? 'text' : 'password'" name="password_confirmation"
                    placeholder="Konfirmasi password"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                <span @click="showPassword2 = !showPassword2"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400" style="margin-top: 12px;">
                    <!-- Mata tertutup -->
                    <svg x-show="!showPassword2" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 4.043c-3.518 0-6.505 2.266-7.585 5.416a1.008 1.008 0 000 .943c1.08 3.15 4.067 5.417 7.585 5.417s6.505-2.267 7.585-5.417a1.008 1.008 0 000-.943C16.505 6.309 13.518 4.043 10 4.043zM10 13.862c-2.767 0-5.132-1.725-6.077-4.16C4.868 7.267 7.233 5.543 10 5.543s5.132 1.724 6.077 4.16c-.945 2.435-3.31 4.159-6.077 4.159z" />
                        <path d="M10 7.844a1.86 1.86 0 100 3.718A1.86 1.86 0 0010 7.844z" />
                    </svg>
                    <!-- Mata terbuka -->
                    <svg x-show="showPassword2" class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.638 3.577a.833.833 0 00-1.06 1.06L4.853 5.914a8.323 8.323 0 00-2.438 3.545.833.833 0 000 .943c1.08 3.15 4.067 5.416 7.585 5.416 1.255 0 2.442-.288 3.5-.802l1.863 1.864a.833.833 0 001.179-1.178L4.638 3.577zM10 13.862c-.47 0-.93-.056-1.36-.16l-1.716-1.715A1.86 1.86 0 0010 11.561h.015c1.027 0 1.859-.832 1.859-1.859 0-.45-.162-.862-.429-1.178l1.537 1.537c-.665.875-1.653 1.5-2.982 1.5z" />
                    </svg>
                </span>
            </div>

            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Nomor WA
                </label>
                <input type="text" placeholder="Masukkan nomor wa" name="phone"
                    value="{{ old('phone', $wali->phone ?? '') }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>

            <!-- Tombol Submit Biasa -->
            <div class="pt-4 text-right">
                <button type="button"
                    onclick="setTimeout(() => window.location.href = '{{ route('akun-wali-siswa') }}', 1000);"
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
                    {{ isset($wali) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </div>
    </form>

</div>
