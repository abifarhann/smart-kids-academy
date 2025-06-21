<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSiswaController extends Controller
{
     public function formSiswa()
    {
        return view('partials.admin.form-siswa');
    }
}
