<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDueno extends Migration
{
    
    public function up()
    {
        Schema::create('dueno', function (Blueprint $table) {
            $table->increments('id_dueno');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Sexo');
            $table->integer('Edad');
            $table->integer('Cedula');
            $table->integer('Carros');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Celular');
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
        Schema::dropIfExists('dueno');
    }
}
