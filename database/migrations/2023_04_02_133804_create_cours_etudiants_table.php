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
        Schema::create('cours_etudiants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etud_id')->foreignKey('etudiants');
            $table->unsignedBigInteger('cours_id')->foreignKey('cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_etudiants');
    }
};
