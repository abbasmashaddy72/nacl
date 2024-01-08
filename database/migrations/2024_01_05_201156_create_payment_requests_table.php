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
        Schema::create('payment_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('payer_id')->nullable();
            $table->string('receiver_id')->nullable();
            $table->decimal('payment_amount', 24, 2)->default(0.00);
            $table->string('gateway_callback_url')->nullable();
            $table->string('success_hook')->nullable();
            $table->string('failure_hook')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency_code', 20)->default('USD');
            $table->string('payment_method')->nullable();
            $table->longText('additional_data')->nullable()->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->boolean('is_paid')->default(0);
            $table->longText('payer_information')->nullable()->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->string('external_redirect_link')->nullable();
            $table->longText('receiver_information')->nullable()->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->string('attribute_id')->nullable();
            $table->string('attribute')->nullable();
            $table->string('payment_platform')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_requests');
    }
};
