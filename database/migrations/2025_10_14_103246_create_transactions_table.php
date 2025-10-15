<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique()->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            
            // Customer details for guests
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->text('address')->nullable();

            $table->decimal('total_price', 10, 2);
            $table->string('status')->default('pending');
            $table->boolean('is_read')->default(false);
            $table->string('payment_token')->nullable();
            $table->json('payment_details')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
