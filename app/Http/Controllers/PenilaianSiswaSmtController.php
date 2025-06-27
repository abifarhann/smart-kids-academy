<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianSiswaSmtController extends Controller
{
    public function PenilaianSiswaSmt()
    {
        return view('partials.walimurid.penilaian-siswa-smt');
    }
}
