<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    Public function aboutview(){
        return view('about-us', ['link' => 'about-us']);
    }
}
