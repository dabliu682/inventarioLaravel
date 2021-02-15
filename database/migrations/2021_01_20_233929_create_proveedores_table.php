<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');  
            $table->bigInteger('identificacion');          
            $table->string('nombre');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('ciudad');
            $table->bigInteger('no_cuenta');
            $table->string('banco');
            $table->string('tipo_cuenta');
            $table->string('nombre_cuenta'); 
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
        Schema::dropIfExists('proveedores');
    }
}
