<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');            
            $table->bigInteger('abono');
            $table->bigInteger('saldo'); 
            $table->bigInteger('no_pagos');
            $table->bigInteger('valor_pago');
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
        Schema::dropIfExists('creditos');
    }
}
