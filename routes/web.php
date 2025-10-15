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
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', App\Http\Controllers\Admin\AdminProductController::class);
    Route::get('transactions', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('transactions.index');
    Route::resource('news', BeritaController::class);
    Route::delete('news-destroy-multiple', [BeritaController::class, 'destroyMultiple'])->name('news.destroyMultiple');
});

// Temporary route for branding page
Route::get('/batikenem', [App\Http\Controllers\BrandingController::class, 'batikEnem']);
Route::get('/energienem', [App\Http\Controllers\BrandingController::class, 'energiEnem']);
Route::get('/studioenem', [App\Http\Controllers\BrandingController::class, 'studioEnem']);


// Jurusan
Route::get('/rpl', [App\Http\Controllers\JurusanController::class, 'rpl'])->name('rpl');
Route::get('/dkv', [App\Http\Controllers\JurusanController::class, 'dkv'])->name('dkv');
Route::get('/bd', [App\Http\Controllers\JurusanController::class, 'bd'])->name('bd');
Route::get('/akl', [App\Http\Controllers\JurusanController::class, 'akl'])->name('akl');
Route::get('/mp', [App\Http\Controllers\JurusanController::class, 'mp'])->name('mp');
Route::get('/kkbt', [App\Http\Controllers\JurusanController::class, 'kkbt'])->name('kkbt');
Route::get('/detail', function () {
    return view('product.detail');
});
Route::get('/brand-dkv', function () {
    return view('brandingsmk6.studioenem');
});
Route::get('/detaileskul', function () {
    return view('detaileskul');
});

// Cart Routes
Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::patch('cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::delete('cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');

// Product and Payment Routes
Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::post('/checkout', [App\Http\Controllers\PaymentController::class, 'checkout'])->name('checkout');
Route::get('/pembayaran-sukses', [App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');
Route::post('/midtrans/callback', [App\Http\Controllers\PaymentController::class, 'callback'])->name('midtrans.callback');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/transactions', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/{transaction}', [App\Http\Controllers\Admin\TransactionController::class, 'show'])->name('transactions.show');
    Route::post('/transactions/{transaction}/update-status', [App\Http\Controllers\Admin\TransactionController::class, 'updateStatus'])->name('transactions.updateStatus');
    Route::get('/notifications', [App\Http\Controllers\Admin\NotificationController::class, 'getUnread'])->name('notifications.unread');
    Route::post('/notifications/read', [App\Http\Controllers\Admin\NotificationController::class, 'markAsRead'])->name('notifications.read');

    // Admin Profile Routes
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');

    // Admin Settings Routes (Placeholder)
    Route::get('/settings', function () {
        return view('admin.settings.index'); // Create this view later
    })->name('settings.index');

    // Debug route to reset notifications
    Route::get('/reset-notifications', function() {
        \App\Models\Transaction::where('status', 'success')->update(['is_read' => false]);
        return 'All successful transactions have been marked as unread.';
    });
});
Route::get('/visimisi', function () {
    return view('visimisi');
})->name('visimisi');
