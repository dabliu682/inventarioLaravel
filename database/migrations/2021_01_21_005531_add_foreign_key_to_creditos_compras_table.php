<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCreditosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('creditos_compras', function (Blueprint $table) {
            $table->bigInteger('id_compras')->unsigned()->after('id');
            
            $table->foreign('id_compras')
            ->references('id')
            ->on('compras')
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
        Schema::table('creditos_compras', function (Blueprint $table) {
            //
        });
    }
}
