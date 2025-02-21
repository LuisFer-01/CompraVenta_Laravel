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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('dish_id')->constrained('dishes')->onDelete('cascade');
            $table->foreignId('ingredient_id')->constrained('ingredients')->onDelete('cascade');
            $table->integer('quantity');
            $table->foreignId('measure_unit_id')->constrained('measure_unit')->onDelete('cascade');
            $table->enum('status', ['available','archived'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
