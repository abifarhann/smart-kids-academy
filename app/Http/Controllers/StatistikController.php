<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        return view('partials.admin.statistik');
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
