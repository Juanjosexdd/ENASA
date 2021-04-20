<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleProductosAlmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos_almacen', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('almacen_id');
            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('almacen_id')
                  ->references('id')
                  ->on('almacens');

            $table->foreign('productos_id')
            ->references('id')
            ->on('productos');
            

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
        Schema::dropIfExists('detalle_productos_almacen');
    }
}
