<!-- ====== Chart One Start -->
<div
    x-data="chartOne"
    x-init="init"
    class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6 col-span-12">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            Pendidikan Siswa
        </h3>
        <!-- Dropdown opsional bisa diaktifkan kembali jika perlu -->
    </div>

    <div class="max-w-full overflow-x-auto custom-scrollbar">
        <div class="-ml-5 min-w-[650px] pl-2 xl:min-w-full">
            <div id="chartOne" x-ref="chartOne" class="-ml-5 h-full min-w-[650px] pl-2 xl:min-w-full"></div>
        </div>
    </div>
    <!-- Contoh tombol update data -->
    <button @click="update([40, 50, 35])" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
        Update Data
    </button>
</div>
<!-- ====== Chart One End -->
