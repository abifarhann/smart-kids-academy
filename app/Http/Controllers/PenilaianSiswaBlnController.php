<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Raport;

class PenilaianSiswaBlnController extends Controller
{
    public function PenilaianSiswaBln()
    {
        $waliMurid = auth()->user();
        $dataSiswa = Siswa::where('id_user', $waliMurid->id)->with('program')->get();
        return view('partials.walimurid.penilaian-siswa-bulan', compact('waliMurid', 'dataSiswa'));
    }

    public function detailNilaiBulanan(Request $request)
    {
        $waliMurid = auth()->user();
        $siswa = Siswa::find($request->id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        // Ambil hanya raport dengan jenis_nilai = 'bulanan'
        $raports = Raport::with('mapel')
            ->where('jenis_nilai', 'Bulanan')
            ->where('id_siswa', $siswa->id)
            ->orderBy('tanggal_penilaian')
            ->get();

        if ($raports->isEmpty()) {
            return redirect()->back()->with('error', 'Data raport bulanan tidak atau belum ada untuk siswa ini.');
        }

        // Ambil daftar nama mapel unik
        $mapelList = $raports->pluck('mapel.nama')->unique()->values();

        return view('partials.walimurid.detail-nilai-bulan', compact('waliMurid', 'siswa', 'raports', 'mapelList'));
    }

}
