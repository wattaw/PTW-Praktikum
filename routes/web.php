<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|g
*/

Route::get('/', function () {
    return view('home0166');
    
});
Route::get('/home',[HomeController::class,'index']);

Route::get('/artikel',[ArtikelController::class,'index']);

Route::get('/kontak',[KontakController::class,'index']);
