 <!-- Breadcrumb Start -->
 <div x-data="{ pageName: `Evaluasi Bulanan Siswa` }">
     <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
         <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
         <nav class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
             <p class="flex items-center gap-1.5 text-sm">
                 Penilaian Siswa
                 <svg class="stroke-current w-4 h-4" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="currentColor" stroke-width="1.2"
                         stroke-linecap="round" stroke-linejoin="round" />
                 </svg>
             </p>
             <ol class="flex items-center gap-1.5">
                 <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
             </ol>
         </nav>
     </div>
 </div>
 <!-- Breadcrumb End -->

 <div class="max-w-4xl mx-auto">
     {{-- welcome card --}}
     <div id="welcome-card" class="relative flex flex-col p-6 rounded-2xl shadow-lg overflow-hidden
            bg-blue-50 dark:bg-blue-950 dark:border dark:border-blue-700
            md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto"
         style="background-color:#0047A0; min-height: 200px;">

         <img class="img-bg" src="/images/website/union.png" alt="background-illustration"
             style="width: 100vw; position: absolute; top: 0; bottom: 0; left: 0;">

         <div class="flex flex-col md:flex-row items-center justify-between gap-4">
             <div class="flex-1 order-2 md:order-1 text-center md:text-left z-10"> {{-- Z-index to ensure text is above illustration --}}
                 <h2
                     style="font-size: 2.5rem; font-weight: 600; color: white; line-height: 1.25; margin-bottom: 2rem;">
                     Selamat Datang 
                     <span 
                         style="color: white; padding: 4px; background-color: #0047A0; border-radius: 8px;">Upik Sudiati</span>
                 </h2>
                 <p class="text-white dark:text-gray-300 text-base sm:text-lg leading-relaxed">
                     Kami senang melihat Anda kembali! <br />
                     Yuk, Pantau terus perkembangan belajar putra/putri Anda setiap
                     bulan.
                 </p>
             </div>
         </div>
     </div>

     <div class="flex flex-col mt-8 rounded-xl shadow-md dark:bg-black">
         <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-400">
             Nama Siswa
         </label>
         <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
             <select
                 class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                 :class="isOptionSelected & amp & amp 'text-gray-800 dark:text-white/90'"
                 @change="isOptionSelected = true">
                 <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                     Anastasia
                 </option>
                 <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                     Luke
                 </option>
             </select>
             <span
                 class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                 <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5"
                         stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg>
             </span>
         </div>
     </div>


     <div class="flex sm:flex-col mt-8 gap-3 items-center md:flex-row w-full">
         <!-- Konten Pertama -->
         <div class="flex flex-col gap-4 rounded-xl shadow-md dark:bg-black h-1/3 w-full md:w-1/2">
             <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-400">
                 Tahun Ajaran
             </label>
             <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                 <select
                     class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                     :class="isOptionSelected && 'text-gray-800 dark:text-white/90'" @change="isOptionSelected = true">
                     <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">2025</option>
                     <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">2026</option>
                 </select>
                 <span
                     class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                     <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke-width="1.5"
                             stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                 </span>
             </div>
         </div>

         <!-- Konten Kedua -->
         <div class="flex flex-col gap-4 rounded-xl shadow-md dark:bg-black h-1/3 w-full md:w-1/2">
             <label class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-400">
                 Semester
             </label>
             <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                 <select
                     class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                     :class="isOptionSelected && 'text-gray-800 dark:text-white/90'" @change="isOptionSelected = true">
                     <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Ganjil</option>
                     <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Genap</option>
                 </select>
                 <span
                     class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                     <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke-width="1.5"
                             stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                 </span>
             </div>
         </div>
     </div>
 </div>
