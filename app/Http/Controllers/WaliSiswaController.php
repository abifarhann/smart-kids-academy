<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaliSiswaController extends Controller
{
    public function dataWali()
    {
        return view('partials.admin.akun-wali-siswa');
    }
}
