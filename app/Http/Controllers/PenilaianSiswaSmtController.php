<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Raport;

class PenilaianSiswaSmtController extends Controller
{
    public function PenilaianSiswaSmt()
    {
        $waliMurid = auth()->user();
        $dataSiswa = Siswa::where('id_user', $waliMurid->id)->with('program')->get();
        return view('partials.walimurid.penilaian-siswa-smt', compact('waliMurid', 'dataSiswa'));
    }

    public function detailNilaiSemester(Request $request)
    {
        $waliMurid = auth()->user();
        $siswa = Siswa::find($request->id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        $raports = Raport::with('mapel')
            ->where('jenis_nilai', 'Semester')
            ->where('id_siswa', $siswa->id)
            ->orderBy('tanggal_penilaian')
            ->get();

        if ($raports->isEmpty()) {
            return redirect()->back()->with('error', 'Data raport semester tidak atau belum ada untuk siswa ini.');
        }

        // Ambil daftar nama mapel unik
        $mapelList = $raports->pluck('mapel.nama')->unique()->values();

        return view('partials.walimurid.detail-nilai-semester', compact('waliMurid', 'siswa', 'raports', 'mapelList'));
    }
}
