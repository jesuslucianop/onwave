<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carros extends Model
{
    protected $table = "carros";
    protected $fillable = ['Id_Carro','Marca', 'Modelo', 'Ano','Trim','Duenos','Valor_estimado'];
}
