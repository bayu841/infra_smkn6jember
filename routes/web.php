<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PublicBeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});
Route::get('/home', function () {
    $beritas = Berita::latest()->take(3)->get();
    return view('home', compact('beritas'));
})->name('halaman-utama');

// Public Berita Routes
Route::get('/berita', [PublicBeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita}', [PublicBeritaController::class, 'show'])->name('berita.show');


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('news', BeritaController::class);
});

// Temporary route for branding page
Route::get('/brand', function () {
    return view('brandingsmk6.batikenem');
});

// Jurusan
Route::get('/rpl', function () {
Route::get('/brand', function(){
    return view('brandingsmk6.batikenem');
});
});

// Jurusan
Route::get('/rpl', function(){
    return view('rpl');
});
Route::get('/dkv', function () {
    return view('dkv');
});
Route::get('/bd', function () {
    return view('bd');
});
Route::get('/akl', function () {
    return view('akl');
});
Route::get('/mp', function () {
    return view('mp');
});
Route::get('/kkbt', function () {
    return view('kkbt');
});
Route::get('/detail', function () {
    return view('product.detail');
});