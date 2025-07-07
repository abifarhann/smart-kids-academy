 <!-- Breadcrumb Start -->
 <div x-data="{ pageName: `Evaluasi Akhir Semester` }">
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
     <div id="welcome-card"
         class="relative flex flex-col p-6 rounded-2xl shadow-lg overflow-hidden
            bg-blue-50 dark:bg-blue-950 dark:border dark:border-blue-700
            md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto"
         style="background-color:#0047A0; min-height: 200px;">

         <img class="img-bg" src="/images/website/union.png" alt="background-illustration"
             style="width: 100vw; position: absolute; top: 0; bottom: 0; left: 0;">

         <div class="flex flex-col md:flex-row items-center justify-between gap-4">
             <div class="flex-1 order-2 md:order-1 text-center md:text-left z-10"> {{-- Z-index to ensure text is above illustration --}}
                 <h2 style="font-size: 2.5rem; font-weight: 600; color: white; line-height: 1.25; margin-bottom: 2rem;">
                     Selamat Datang
                     <span
                         style="color: white; padding: 4px; background-color: #0047A0; border-radius: 8px;">{{ $waliMurid->name }}</span>
                 </h2>
                 <p class="text-white dark:text-gray-300 text-base sm:text-lg leading-relaxed">
                     Kami senang melihat Anda kembali! <br />
                     Yuk, Pantau terus perkembangan belajar putra/putri Anda setiap
                     bulan.
                 </p>
             </div>
         </div>
     </div>
     {{-- Siswa card --}}
     <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
         @foreach ($dataSiswa as $siswa)
             <a href="{{ route('detail-nilai-semester', ['id' => $siswa->id]) }}"
                 class="block bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 transition hover:shadow-lg hover:bg-blue-100 dark:hover:bg-blue-900 cursor-pointer border border-gray-200 dark:border-gray-700">
                 <div class="flex items-center gap-4">
                     <div class="flex-shrink-0">
                         <img src="{{ $siswa->foto ?? '/images/avatar-default.png' }}" alt="Foto Siswa"
                             class="w-14 h-14 rounded-full object-cover border border-blue-200 dark:border-blue-700">
                     </div>
                     <div>
                         <div class="font-semibold text-lg text-gray-800 dark:text-white">{{ $siswa->nama }}</div>
                         <div class="text-sm text-gray-500 dark:text-gray-300">
                             {{ ucfirst($siswa->jenis_kelamin) }}
                         </div>
                     </div>
                 </div>
             </a>
         @endforeach
     </div>
