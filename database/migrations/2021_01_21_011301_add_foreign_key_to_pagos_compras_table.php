<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPagosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos_compras', function (Blueprint $table) {
            
            $table->bigInteger('id_credito_compras')->unsigned()->after('id');
            
            $table->foreign('id_credito_compras')
            ->references('id')
            ->on('creditos_compras')
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
        Schema::table('pagos_compras', function (Blueprint $table) {
            //
        });
    }
}
