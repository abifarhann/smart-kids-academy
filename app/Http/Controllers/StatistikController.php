<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TingkatPendidikan;
use App\Models\Program;

class StatistikController extends Controller
{
    public function index()
    {
        $jumlahSiswa = Siswa::count();
        $jumlahMentor = Mentor::count();

        $jumlahPerTingkat = TingkatPendidikan::withCount('siswa')
            ->has('siswa')
            ->orderByDesc('siswa_count')
            ->get();

        $topProgramBimbel = Program::withCount('siswa')
            ->whereHas('siswa')
            ->orderByDesc('siswa_count')
            ->get()
            ->map(function ($item) {
                return [
                    'nama_program' => $item->nama_program,
                    'total' => $item->siswa_count,
                ];
            });

        return view('partials.admin.statistik', compact('jumlahSiswa', 'jumlahPerTingkat', 'topProgramBimbel', 'jumlahMentor'));
    }



    // graph pendidikan siswa
    // public function chartPendidikan()
    // {
    //     $data = DB::table('siswa')
    //         ->select('pendidikan', DB::raw('COUNT(*) as jumlah'))
    //         ->groupBy('pendidikan')
    //         ->orderBy('pendidikan')
    //         ->get();

    //     return response()->json([
    //         'labels' => $data->pluck('pendidikan'),
    //         'values' => $data->pluck('jumlah')
    //     ]);
    // }
}
