<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_movimiento_id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('usuario_id');
            $table->string("descripcion");
            $table->string("observacion");
            $table->unsignedBigInteger("estatus_id");


            $table->foreign('tipo_movimiento_id')
                  ->references('id')
                  ->on('tipo_movimientos');
                  
            $table->foreign('empleado_id')
                  ->references('id')
                  ->on('empleados');

            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('users');

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
        Schema::dropIfExists('movimiento_productos');
    }
}
