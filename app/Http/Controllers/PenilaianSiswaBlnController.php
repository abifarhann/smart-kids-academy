<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianSiswaBlnController extends Controller
{
    public function PenilaianSiswaBln()
    {
        return view('partials.walimurid.penilaian-siswa-bulan');
    }
}
