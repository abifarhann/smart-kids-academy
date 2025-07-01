<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaportBulananController extends Controller
{
    function raportBulanan()
    {
        return view('partials.admin.raport-bulanan');
    }
}
