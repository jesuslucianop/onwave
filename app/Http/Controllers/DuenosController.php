<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duenos;
use App\Http\Requests\DuenosRequest;
use App\Http\Requests\DuenouniqueRequest;
use App\Http\Requests\DuenoeditRequest;

class DuenosController extends Controller
{
    public function CrearduenoS(DuenosRequest $request)
    {
    $data =$request->all();
    
     $duenos= Duenos::create($data);
        if($duenos)
        {
            return $request->all();
        }else {
            return json_encode("No se pudo agregar el dueño");
            return  $request->all();
        }
     
        //return $request->Nombre;

    }
    public function Obtenertodosduenos()
    {
        $duenos  =  Duenos::all();
        return $duenos->toJson();
    }

    public function Obtenerdueno(DuenouniqueRequest $request)
    {
        $id=$request->id_dueno;
       $dueno =  Duenos::find($id);
      if($dueno){
        return json_encode($dueno);
      }elseif ($dueno == null) {
          return json_encode("Usuario no existente ");
      }
    
    }
    public function Editardueno(DuenoeditRequest $request)
    {
      //return $request->all(); 

        $id = $request->id_dueno;
      
        
        $Nombre = $request->Nombre;
        $Apellido = $request->Apellido;
        $Sexo = $request->Sexo;
        $Edad = $request->Edad;
        $Cedula = $request->Cedula;
        $Carros= $request->Carros;
        $Direccion= $request->Direccion;
        $Telefono= $request->Telefono;
        $Celular= $request->Celular;

        $dueno = Duenos ::where('id_dueno', $id)->update(['Nombre' => $Nombre,
        'Apellido'=>$Apellido,
        'Sexo'=>$Sexo,
        'Edad'=>$Edad,
        'Cedula'=>$Cedula,
        'Carros'=>$Carros,
        'Direccion'=>$Direccion,
        'Telefono'=>$Telefono,
        'Celular'=>$Celular


        
        ]);
    return $request->all();
    
    }
    public function Eliminardueno()
    {
        
    }
}
