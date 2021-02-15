<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {

            $table->bigInteger('id_categorias')->unsigned()->after('nombre');
            
            $table->foreign('id_categorias')
            ->references('id')
            ->on('categorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('id_marca')->unsigned()->after('linea');
            
            $table->foreign('id_marca')
            ->references('id')
            ->on('marcas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('id_ubicacion')->unsigned()->after('id_marca');
            
            $table->foreign('id_ubicacion')
            ->references('id')
            ->on('estantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('id_proveedores')->unsigned()->after('valor_salida');
            
            $table->foreign('id_proveedores')
            ->references('id')
            ->on('proveedores')
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
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
}
