<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiSemesterController extends Controller
{
     public function nilaiSemester()
    {
        return view('partials.admin.nilai-semester');
    }
}
