<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carro_dueno extends Model
{
    protected $table = "carro_dueno";
    protected $fillable = ['Id','Id_Dueno', 'Id_Carro'];
}
