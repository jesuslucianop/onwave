<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duenos;

class DuenosController extends Controller
{
    public function CrearduenoS(Request $request)
    {
           $duenos = new Duenos();
           $duenos->Nombre = $request->Nombre;
           $duenos->Apellido= $request->Apellido;
           $duenos->Sexo= $request->Sexo;
           $duenos->Edad= $request->Edad;
           $duenos->Cedula= $request->Cedula;
           $duenos->Carros= $request->Carros;
           $duenos->Direccion= $request->Direccion;
           $duenos->Telefono= $request->Telefono;
           $duenos->Celular= $request->Celular;
           
           if($duenos->save()){
               return json_encode("Dueno agregado correctamente");
           }else{
               return $duenos->toJson();
           }
           return $duenos->toJson();
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
