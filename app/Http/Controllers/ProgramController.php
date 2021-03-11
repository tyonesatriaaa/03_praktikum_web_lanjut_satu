<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    Public function program($id){
        return view('program', ['link' => $id]);
    }
}
