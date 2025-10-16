<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 255);
            $table->string('phone', 20);
            $table->text('message');
            $table->string('ip_address', 45)->nullable(); // Support IPv6
            $table->text('user_agent')->nullable();
            $table->enum('status', ['unread', 'read', 'replied', 'spam'])->default('unread');
            $table->timestamps();

            // Index untuk optimisasi query
            $table->index('email');
            $table->index('status');
            $table->index('created_at');
            $table->index(['ip_address', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
