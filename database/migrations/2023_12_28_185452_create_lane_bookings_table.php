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
        Schema::create('lane_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sport_id')->constrained('sports')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('contact_number');
            $table->decimal('advance_amount', 8, 2);
            $table->decimal('total_amount', 8, 2);
            $table->decimal('refund_amount', 8, 2)->default(0);
            $table->enum('amount_status', ['paid', 'partialPaid', 'due', 'refund', 'partialRefund']);
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->enum('status', ['open', 'booked', 'closed', 'canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lane_statuses');
    }
};
