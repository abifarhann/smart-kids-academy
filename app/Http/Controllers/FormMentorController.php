<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormMentorController extends Controller
{
    public function formMentor()
    {
        return view('partials.admin.form-mentor');
    }
}
