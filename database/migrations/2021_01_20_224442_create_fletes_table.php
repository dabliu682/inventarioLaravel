<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fletes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');            
            $table->string('nombre_transportadora');
            $table->string('nombre_tranportador');
            $table->string('telefono');
            $table->string('direccion');
            $table->text('descripcion');
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
        Schema::dropIfExists('fletes');
    }
}
