<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getUnread()
    {
        $unreadCount = Transaction::where('status', 'success')->where('is_read', false)->count();
        $transactions = Transaction::where('status', 'success')->where('is_read', false)->latest()->take(5)->get();

        return response()->json([
            'count' => $unreadCount,
            'items' => $transactions->map(function ($trx) {
                return [
                    'message' => 'Pesanan baru dari ' . $trx->customer_name,
                    'time' => $trx->created_at->diffForHumans(),
                    'url' => route('admin.transactions.index') // Ganti dengan URL detail jika ada
                ];
            })
        ]);
    }

    public function markAsRead()
    {
        Transaction::where('status', 'success')->where('is_read', false)->update(['is_read' => true]);
        return response()->json(['success' => true]);
    }
}