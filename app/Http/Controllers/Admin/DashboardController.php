<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $beritaCount = Berita::count();
        $beritas = Berita::latest()->take(5)->get();
        $userCount = User::count();
        $latestUser = User::latest()->first();

        $totalRevenue = Transaction::where('status', 'SUCCESS')->sum('total_price');
        $totalTransactions = Transaction::count();
        $successfulTransactions = Transaction::where('status', 'SUCCESS')->count();

        return view('admin.dashboard', compact(
            'beritaCount', 
            'beritas', 
            'userCount', 
            'latestUser',
            'totalRevenue',
            'totalTransactions',
            'successfulTransactions'
        ));
    }
}