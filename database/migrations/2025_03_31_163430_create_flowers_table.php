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
        Schema::create('flowers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('color');
            $table->string('season');
            $table->string('type');
            $table->text('description')->nullable(); 
            $table->string('care_sun')->nullable();  
            $table->string('care_water')->nullable();
            $table->string('care_soil')->nullable();
            $table->timestamps();
        });
    }
    public function show(Flower $flower)
    {
        return view('flowers.show', compact('flower'));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flowers');
    }
};
