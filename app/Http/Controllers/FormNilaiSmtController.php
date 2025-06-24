<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormNilaiSmtController extends Controller
{
    public function formNilaiSmt()
    {
        return view('partials.admin.form-nilai-smt');
    }
}
