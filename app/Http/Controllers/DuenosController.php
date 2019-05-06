<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duenos;

class DuenosController extends Controller
{
    public function CrearduenoS()
    {
           
    }
    public function Obtenertodosduenos()
    {
        $duenos  =  Duenos::all();
        return $duenos->toJson();
    }

    public function Obtenerdueno($id)
    {
        $duenos = find($id);

    }
    public function Editardueno()
    {

    }
    public function Eliminardueno()
    {

    }
}
