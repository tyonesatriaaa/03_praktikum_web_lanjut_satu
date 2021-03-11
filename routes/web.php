<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
   return view('home',['link' => 'https://www.educastudio.com/']);
});

Route::prefix('products')->group(function() {
    Route::get('/', [ProductsController::class, 'products']);
});

route::get('/news/{id?}', function ($id = null){
    if ($id){
    return view('news',['link' => $id]);
        
    }else{
        return view('news1',['link' => 'https://www.educastudio.com/news']);
}
}
);

Route::prefix('program')->group(function() {
    Route::get('/{id?}', [ProgramController::class, 'program']);
});

route::get('/about-us',[AboutController::class, 'aboutview']);

route::resource('contact-us', ContactController::class);