@php
    use Carbon\Carbon;

    $now = Carbon::now();
    $month = $now->month;
    $year = $now->year;

    if ($month >= 1 && $month <= 6) {
        // Semester Genap: hanya tampilkan bulan Juni
        $semester = 'genap';
        $months = ['Juni'];
        $displayYear = $year;
    } else {
        // Semester Ganjil: hanya tampilkan bulan Desember
        $semester = 'ganjil';
        $months = ['Desember'];
        $displayYear = $year;
    }
@endphp

<h3 class="text-xl font-bold mb-4 p-6">Semester {{ ucfirst($semester) }} {{ $displayYear }}</h3>

<div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 p-6">
    @foreach ($months as $index => $monthName)
        <div class="flex flex-col">
            <a href="{{ route('raport-semester') }}"
                class="bg-white shadow-md flex flex-col md:flex-row lg:flex-row p-6 rounded-lg items-start md:items-center gap-4">

                {{-- Gambar --}}
                <img src="{{ asset('images/b-' . ($index + 1) . '.jpg') }}" alt="Bulan {{ $monthName }}"
                    style="width:120px; height: 120px; border-radius: 20px; margin-right: 20px;" />

                {{-- Konten teks --}}
                <div class="flex flex-col">
                    <h2 class="text-lg font-semibold text-gray-800" style="margin-top: 12px">
                        Rapor Semester {{ ucfirst($semester) }} {{ $displayYear }}
                    </h2>
                    <p class="text-sm text-gray-600">
                        Evaluasi Akhir Semester {{ ucfirst($semester) }} tahun {{ $displayYear }}.
                    </p>
                    <p class="text-brand-500 hover:text-brand-600 dark:text-brand-400" style="margin-top: 24px">
                        Klik untuk melihat
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
