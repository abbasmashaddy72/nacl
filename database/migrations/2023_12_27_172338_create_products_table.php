<?php

use App\Enums\ProductType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('image_url')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->decimal('price', 10, 2);
            $table->boolean('is_visible')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->enum('type', ProductType::values())->default(ProductType::Deliverable);
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
