<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleMovimientoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_movimiento_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movimiento_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('almacen_id');

            $table->string('cantidad');
            $table->string('observacion');

            $table->foreign('movimiento_id')
                  ->references('id')
                  ->on('movimiento_productos');
            
            $table->foreign('producto_id')
                  ->references('id')
                  ->on('productos');

            $table->foreign('almacen_id')
                  ->references('id')
                  ->on('almacens');
                  
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
        Schema::dropIfExists('detalle_movimiento_producto');
    }
}
