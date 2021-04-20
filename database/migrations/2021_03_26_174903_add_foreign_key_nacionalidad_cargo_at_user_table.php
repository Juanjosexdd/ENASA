<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyNacionalidadCargoAtUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->unsignedBigInteger('cargo_id')
                  ->after('id');

            $table->foreign('cargo_id')
                  ->references('id')
                  ->on('cargos');

            $table->unsignedBigInteger('nacionalidad_id')
                  ->after('cargo_id');

            $table->foreign('nacionalidad_id')
                  ->references('id')
                  ->on('nacionalidads');

            $table->string("cedula")->unique()->after('cargo_id');
            $table->string("last_name")->after('name');
            $table->string("address")->after('last_name');
            $table->string("phone")->after('address');
            $table->string("phone2")->after('phone');
            $table->boolean('estatus')->default(1)->after('phone2');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
