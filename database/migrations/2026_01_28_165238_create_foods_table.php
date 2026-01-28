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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            // Basic info
            $table->string('title');
            $table->string('category'); // Breakfast | Lunch | Dinner
            $table->string('image_url')->nullable();
            // Nutrition values
            $table->unsignedInteger('kcal')->nullable();
            $table->decimal('protein', 6, 2)->nullable();
            $table->decimal('carbs', 6, 2)->nullable();
            $table->decimal('fat', 6, 2)->nullable();
            $table->decimal('fiber', 6, 2)->nullable();
            $table->decimal('calcium', 6, 2)->nullable();
            $table->decimal('iron', 6, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
