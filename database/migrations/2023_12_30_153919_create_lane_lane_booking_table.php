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
        Schema::create('lane_lane_booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lane_id')->nullable()->constrained('lanes')->cascadeOnDelete();
            $table->foreignId('lane_booking_id')->constrained('lane_bookings')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lane_booking_lane');
    }
};
