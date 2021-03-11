<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products($id){
        return view ('products', ['link' -> $id]);
    }
}
