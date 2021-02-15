<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_compras', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');            
            $table->bigInteger('no_cuota');
            $table->bigInteger('valor_cuota');
            $table->date('fecha_cuota');
            $table->bigInteger('no_reciboCaja')->nullable();
            $table->bigInteger('Valor_pago')->nullable();
            $table->bigInteger('saldo');
            $table->string('userCreate');
            $table->string('userPago')->nullable();
            $table->date('fecha_pago')->nullable();
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
        Schema::dropIfExists('pagos_compras');
    }
}
