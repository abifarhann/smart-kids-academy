<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormWaliController extends Controller
{
    public function formWali()
    {
        return view('partials.admin.form-wali-siswa');
    }
}
