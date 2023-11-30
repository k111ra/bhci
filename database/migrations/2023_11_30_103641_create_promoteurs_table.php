<?php

// database/migrations/YYYY_MM_DD_create_promoteurs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoteursTable extends Migration
{
    public function up()
    {
        Schema::create('promoteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('contact')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promoteurs');
    }
}

