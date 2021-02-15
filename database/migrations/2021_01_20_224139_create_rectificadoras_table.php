<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRectificadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rectificadoras', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');            
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('userCreate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rectificadoras');
    }
}
