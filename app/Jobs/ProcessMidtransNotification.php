<?php

namespace App\Jobs;

use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\Product;

class ProcessMidtransNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $transactionId;
    protected $notificationData;

    public function __construct($transactionId, array $notificationData)
    {
        $this->transactionId = $transactionId;
        $this->notificationData = $notificationData;
    }

    public function handle(): void
    {
        $transaction = Transaction::find($this->transactionId);

        if (!$transaction) {
            Log::error('ProcessMidtransNotification: Transaction not found for ID ' . $this->transactionId);
            return;
        }

        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $this->notificationData['order_id'] . $this->notificationData['status_code'] . $this->notificationData['gross_amount'] . $serverKey);

        if ($hashed == $this->notificationData['signature_key']) {
            Log::info('ProcessMidtransNotification: Signature key is valid for order_id: ' . $transaction->order_id);
            
            if ($this->notificationData['transaction_status'] == 'capture' || $this->notificationData['transaction_status'] == 'settlement') {
                $transaction->update([
                    'status' => 'success',
                    'payment_details' => $this->notificationData,
                ]);
                Log::info('ProcessMidtransNotification: Transaction status updated to success for order_id: ' . $transaction->order_id);

                // Deduct product stock
                foreach ($transaction->items as $item) {
                    $product = Product::find($item->product_id);
                    if ($product) {
                        $product->decrement('stock', $item->quantity);
                        Log::info('ProcessMidtransNotification: Deducted ' . $item->quantity . ' from stock for product ID ' . $product->id);
                    }
                }

            } else if ($this->notificationData['transaction_status'] == 'expire' || $this->notificationData['transaction_status'] == 'deny' || $this->notificationData['transaction_status'] == 'cancel') {
                $transaction->update(['status' => 'failed']);
                Log::info('ProcessMidtransNotification: Transaction status updated to failed for order_id: ' . $transaction->order_id);
            } else {
                Log::info('ProcessMidtransNotification: Transaction status is not settlement/capture/failed. Status: ' . $this->notificationData['transaction_status'] . ' for order_id: ' . $transaction->order_id);
            }
        } else {
            Log::error('ProcessMidtransNotification: Invalid signature key for order_id: ' . $transaction->order_id);
        }
    }
}