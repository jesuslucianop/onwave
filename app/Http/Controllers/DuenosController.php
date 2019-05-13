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
            return $request->all();
    }
    public function Obtenertodosduenos()
    {
        $duenos  =  Duenos::all();
       
        if (!$duenos->isEmpty())
        return $duenos->toJson();
        
        return "NO existe data en la base de datos";
    }

    public function Obtenerdueno(DuenouniqueRequest $request)
    {
        $id=$request->id_dueno;
       $dueno =  Duenos::find($id);
      if($dueno)
        return json_encode($dueno);
      return "Dueño no encontrado";
    
    }
    public function Editardueno(DuenoeditRequest $request)
    {
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
        $dueno = Duenos ::where('id_dueno', $id)->update(['Nombre' => $Nombre, 'Apellido'=>$Apellido,'Sexo'=>$Sexo,'Edad'=>$Edad,
        'Cedula'=>$Cedula, 'Carros'=>$Carros,'Direccion'=>$Direccion,'Telefono'=>$Telefono,'Celular'=>$Celular]);
        return $request->all();
    
    }

    public function Eliminardueno(DuenoeditRequest $request)
    {
        $id = $request->id_dueno;
        $duenos= Duenos::find($id);
        
        if($duenos != null)
            $duenos->delete();
            return "Eliminado correctamente ";
  
    }
}
