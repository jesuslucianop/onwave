<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingkeyCarroDueno extends Migration
{
    public function up()
    {
        Schema::table('carro_dueno', function($table) {
            $table->foreign('Id_Carro')->references('Id_Carro')->on('carros');
            $table->foreign('Id_Dueno')->references('id_dueno')->on('dueno');
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
