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
        Schema::create('lane_sports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lane_id')->constrained('lanes')->cascadeOnDelete();
            $table->foreignId('sport_id')->constrained('sports')->cascadeOnDelete();
            $table->string('min_players')->default(2);
            $table->string('max_players');
            $table->decimal('charges_rate', 8, 2);
            $table->decimal('charge_minutes', 8, 2);
            $table->decimal('weekend_amount_percentage', 8, 2);
            $table->decimal('per_player_percentage', 8, 2);
            $table->time('start_time');
            $table->time('end_time');
            $table->bigInteger('slot_minutes')->default(30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lane_sports');
    }
};
