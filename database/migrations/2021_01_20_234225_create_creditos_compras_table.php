<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos_compras', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');    
            $table->date('fechaInicio');        
            $table->date('fechaFin');        
            $table->bigInteger('abono');
            $table->bigInteger('saldo'); 
            $table->bigInteger('no_cuotas');
            $table->bigInteger('valor_cuota');            
            $table->string('userCreate');
            $table->string('estado');
            $table->bigInteger('plazoDias');

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
        Schema::dropIfExists('creditos_compras');
    }
}
