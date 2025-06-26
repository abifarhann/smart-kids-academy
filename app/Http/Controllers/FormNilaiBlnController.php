<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormNilaiBlnController extends Controller
{
    public function formNilaiBln()
    {
        return view('partials.admin.form-nilai-bulanan');
    }
}
