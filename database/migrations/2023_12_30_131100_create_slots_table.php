<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sport_id')->constrained('sports')->cascadeOnDelete();
            $table->integer('min_players')->default(2);
            $table->integer('max_players')->default(12);
            $table->decimal('base_price', 8, 2);
            $table->integer('base_time');
            $table->decimal('weekend_amount_percentage', 8, 2);
            $table->decimal('per_player_percentage', 8, 2);
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('slot_minutes')->default(30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
