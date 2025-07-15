<!-- Breadcrumb Start -->
<div x-data="{ pageName: `{{ isset($program) ? 'Update Program Bimbel' : 'Tambah Program Bimbel' }}` }">
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
        <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
            <ol class="flex items-center gap-1.5 text-sm">
                <!--  Program Bimbel  -->
                <p class="flex items-center text-sm gap-1.5 text-gray-500 dark:text-gray-400">
                    Program Bimbel
                    <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </p>

                <!-- Program Bimbel  -->
                <li>
                    <a href="{{ route('data-program') }}"
                        class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400">
                        Program Bimbel
                        <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor"
                                stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>

                <!-- Tambah Data  -->
                <li class="text-gray-800 dark:text-white/90" x-text="pageName"></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb End -->

{{-- Data  --}}
<div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
    <form method="POST"
        action="{{ isset($program) ? route('update-data-program', $program->id) : route('store-data-program') }}">
        <!-- Ganti "/your-action-url" dengan URL tujuan pengiriman data -->
        @csrf
        @if (isset($program))
            @method('PUT')
        @endif

        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
            <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Program Bimbel
                </label>
                <input type="text" placeholder="Nama program - Alamat program" name="nama_program"
                    value="{{ old('nama_program', $program->nama_program ?? '') }}"
                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>
            <!-- Tombol Submit Biasa -->
            <div class="pt-4 text-right">
                <button type="button"
                    onclick="setTimeout(() => window.location.href = '{{ route('data-program') }}', 1000);"
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
                    {{ isset($program) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </div>
    </form>

</div>
