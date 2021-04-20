<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('nacionalidad_id');
            
            $table->string("cedula")->unique();
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("celular");
            $table->string("correo");
            $table->string("observacion");
            $table->boolean('estatus')->default(1);
            $table->string("usuario_id");

            $table->foreign('nacionalidad_id')
                  ->references('id')
                  ->on('nacionalidads');
            $table->foreign('cargo_id')
                  ->references('id')
                  ->on('cargos');

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
        Schema::dropIfExists('empleados');
    }
}
