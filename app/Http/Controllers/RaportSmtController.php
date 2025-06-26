<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaportSmtController extends Controller
{
    public function RaportSmt()
    {
        return view('partials.admin.raport-semester');
    }
}
