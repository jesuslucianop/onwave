<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duenos extends Model
{

    protected $table = "dueno";
    protected $fillable = ['id_dueno','Nombre', 'Apellido', 'Sexo','Edad','Cedula','Carros','Direccion','Telefono','Celular'];
}
