<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('caracteristicas');
    }
}
