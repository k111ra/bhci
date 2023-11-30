<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promoteur_id')->constrained();
            $table->foreignId('type_bien_id')->constrained();
            $table->string('nom')->nullable();
            $table->string('localisation')->nullable();
            $table->string('prix')->nullable();
            $table->string('surfaces')->nullable();
            $table->string('nbr_piece')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
