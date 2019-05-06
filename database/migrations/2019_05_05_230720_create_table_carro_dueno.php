<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarroDueno extends Migration
{
    public function up()
    {
    Schema::create('carro_dueno', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('Id_Carro')->unsigned();
        $table->integer('Id_Dueno')->unsigned();

        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('tercera');
}
}
