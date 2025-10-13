<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PublicBeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('brandingsmk6.batikenem');
});


// Jurusan
Route::get('/rpl', function(){
    return view('rpl');
});
Route::get('/dkv', function(){
    return view('dkv');
});
Route::get('/bd', function(){
    return view('bd');
});
Route::get('/akl', function(){
    return view('akl');
});
Route::get('/mp', function(){
    return view('mp');
});
Route::get('/kkbt', function(){
    return view('kkbt');
});
