{{-- button  --}}
<div class="flex justify-end gap-3 items-center">
    {{-- cancel --}}
    <div style="display: flex; justify-content: flex-end;">
        <button onclick="setTimeout(() => window.location.href = '{{ route('data-mentor') }}', 1000);"
            style=" display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.5rem 1rem; border-radius: 0.5rem; border: 1px solid #ef4444; font-size: 0.875rem; font-weight: 500; color: #dc2626; background-color: transparent; transition: background-color 0.2s, color 0.2s, border-color 0.2s;"
            onmouseover="this.style.backgroundColor='#fef2f2'; this.style.color='#b91c1c';"
            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#dc2626';"
            onfocus="this.style.outline='2px solid #ef4444'; this.style.outlineOffset='2px';"
            onblur="this.style.outline='none';"
            class="text-red-600 hover:bg-red-50  dark:text-red-400 dark:hover:bg-red-600/10 dark:focus:ring-red-400">
            Batal
        </button>
    </div>

    {{-- save data --}}
    <div class="flex justify-end">
        <button type="submit"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white shadow hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:bg-brand-500 dark:hover:bg-brand-600 dark:focus:ring-brand-400">
            Simpan
        </button>
    </div>
</div>
