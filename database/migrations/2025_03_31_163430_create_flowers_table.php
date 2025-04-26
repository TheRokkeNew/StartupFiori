<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Metodo up: viene eseguito quando la migrazione viene applicata
     * Crea la tabella 'flowers' nel database
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

    /**
     * Reverse the migrations.
     * Metodo down: viene eseguito quando la migrazione viene rollbackata
     * Elimina la tabella 'flowers' dal database
     */
    public function down(): void
    {
        Schema::dropIfExists('flowers'); // Eliminazione della tabella
    }
};
