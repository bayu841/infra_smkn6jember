<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;
use App\Jobs\ProcessMidtransNotification;

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $cart = session('cart');
        if (empty($cart)) {
            return response()->json(['error' => 'Keranjang Anda kosong.'], 400);
        }

        // Calculate total price and prepare item details from cart
        $totalPrice = 0;
        $item_details = [];
        foreach ($cart as $id => $details) {
            $totalPrice += $details['price'] * $details['quantity'];
            $item_details[] = [
                'id' => $id,
                'price' => (int)$details['price'],
                'quantity' => $details['quantity'],
                'name' => $details['name'],
            ];
        }

        // Create the main transaction record first without an order_id
        $transaction = Transaction::create([
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone,
            'address' => $request->address,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Now, create a unique order_id using the transaction's ID
        $orderId = 'ORDER-' . $transaction->id . '-' . time();
        $transaction->update(['order_id' => $orderId]);

        // Create individual transaction items
        foreach ($cart as $id => $details) {
            $transaction->items()->create([
                'product_id' => $id,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
            ]);
        }

        // Prepare Midtrans parameters
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int)$totalPrice,
            ],
            'item_details' => $item_details,
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'billing_address' => [
                    'address' => $request->address,
                ],
            ],
            'enabled_payments' => [
                'bca_va', 'bni_va', 'bri_va'
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            $transaction->update(['payment_token' => $snapToken]);
            
            // Clear the cart after successful token generation
            session()->forget('cart');

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function callback(Request $request)
    {
        Log::info('Midtrans notification received (via callback).', $request->all());

        // Find the transaction first to get its ID
        $transaction = Transaction::where('order_id', $request->order_id)->first();

        if ($transaction) {
            // Dispatch the job to process the notification in the background
            ProcessMidtransNotification::dispatch($transaction->id, $request->all());
            Log::info('Midtrans notification dispatched to queue for order_id: ' . $request->order_id);
        } else {
            Log::warning('Midtrans notification received for unknown order_id: ' . $request->order_id);
        }

        return response('OK', 200);
    }

    public function success()
    {
        return view('payment_success');
    }
}
