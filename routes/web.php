<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PublicBeritaController;
use App\Models\Berita;
use App\Models\User;
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

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        $beritas = Berita::latest()->take(3)->get();
        $beritaCount = Berita::count();
        $userCount = User::count();
        $latestUser = User::latest()->first();
        return view('admin.dashboard', compact('beritas', 'beritaCount', 'userCount', 'latestUser'));
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
Route::get('/visimisi', function () {
    return view('visimisi');
});