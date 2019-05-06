<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarros extends Migration
{
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('Id_Carro');
            $table->string('Marca');
            $table->string('Modelo');
            $table->integer('Ano');
            $table->string('Trim');
            $table->integer('Duenos');

            $table->timestamps('Fecha_compra');
            $table->integer('Valor_estimado');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
