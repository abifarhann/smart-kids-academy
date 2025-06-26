<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiBulananController extends Controller
{
    public function nilaiBulanan()
    {
        return view('partials.admin.nilai-bulanan');
    }
}
