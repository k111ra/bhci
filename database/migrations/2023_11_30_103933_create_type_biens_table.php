<?php
// database/migrations/YYYY_MM_DD_create_type_biens_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeBiensTable extends Migration
{
    public function up()
    {
        Schema::create('type_biens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_biens');
    }
}
