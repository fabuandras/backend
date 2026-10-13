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
        Schema::create('tanuloszobaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('szobatipus_id')->nullable()->constrained('szobatipusok')->nullOnDelete();
            $table->string('szoba_nev', 30);
            $table->integer('emelet');
            $table->integer('ferohely');
            $table->integer('foglalt_helyek')->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanuloszobaks');
    }
};
