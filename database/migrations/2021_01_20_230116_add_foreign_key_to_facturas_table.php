<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->bigInteger('id_cliente')->unsigned()->after('fecha');
            $table->bigInteger('id_mecanicos')->unsigned()->after('val_flete');
            $table->bigInteger('id_rectificadoras')->unsigned()->after('id_mecanicos');
            $table->bigInteger('id_fletes')->unsigned()->after('id_mecanicos');



            $table->foreign('id_cliente')
            ->references('id')
            ->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('id_mecanicos')
            ->references('id')
            ->on('mecanicos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_rectificadoras')
            ->references('id')
            ->on('rectificadoras')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_fletes')
            ->references('id')
            ->on('fletes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            //
        });
    }
}
