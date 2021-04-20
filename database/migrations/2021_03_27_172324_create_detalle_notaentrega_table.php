<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleNotaentregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_notaentrega', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('notaentrega_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('almacen_id');
            $table->string('cantidad');

            $table->foreign('notaentrega_id')
                  ->references('id')
                  ->on('notaentregas');

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
        Schema::dropIfExists('detalle_notaentrega');
    }
}
