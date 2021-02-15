<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('tipo');
            $table->bigInteger('num_factura');
            $table->bigInteger('num_ordenPedido');
            $table->date('fecha');
            $table->bigInteger('Forma_pago');
            $table->bigInteger('total_venta');
            $table->bigInteger('metodo_pago');
            $table->bigInteger('val_flete');
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
        Schema::dropIfExists('facturas');
    }
}
