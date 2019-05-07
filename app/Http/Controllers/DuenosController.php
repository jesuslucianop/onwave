<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duenos;
use App\Http\Requests\DuenosRequest;

class DuenosController extends Controller
{
    public function CrearduenoS(DuenosRequest $request)
    {
    
           $duenos = Duenos::create($request->all());
           
           if($duenos){
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
