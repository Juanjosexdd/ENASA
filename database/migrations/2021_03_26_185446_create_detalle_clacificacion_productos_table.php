<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleClacificacionProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_clacificacion_productos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('productos_id');
            $table->unsignedBigInteger('clacificacion_id');
            $table->string("usuario_id");

            $table->foreign('productos_id')
                  ->references('id')
                  ->on('productos');
            $table->foreign('clacificacion_id')
                  ->references('id')
                  ->on('clacificiacions');

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
        Schema::dropIfExists('clacificacion_productos');
    }
}
