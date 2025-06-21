<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function dataMentor()
    {
        return view('partials.admin.data-mentor');
    }
}
