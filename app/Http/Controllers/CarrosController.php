<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carros;
use App\Http\Requests\Carroscreaterequest;
use App\Http\Requests\CarrosEditrequest;

class CarrosController extends Controller
{
    public function Crearcarro(Carroscreaterequest $request)
    {

      $carros = $request->all();
      if($carros != null)
      {
        carros::create($request->all());
        return $request->all();
      }
        Return "No se pudo agregar el carro";
      
    }
    public function Obtenertodoscarros()
    {
        $carros  =  carros::all();
        return $carros->toJson();
    }

    public function Obtenercarro(Request $request)
    {
        $id = $request->Id_Carro;
        $carro = Carros::find($request->Id_Carro);
        return !$carro ? json_encode("Carro no existente ") : json_encode($carro);
    }
    public function Editarcarros(CarrosEditrequest $request)
    {
        $id = $request->Id_Carro;
        $Marca = $request->Marca;
        $Modelo = $request->Modelo;
        $Ano = $request->Ano;
        $Trim = $request->Trim;
        $Duenos= $request->Duenos;
        $Valor_estimado= $request->Valor_estimado;
        $Carro = carros::where('Id_Carro', $id);
        if($Carro != null){
          $Carro->update(['Marca' => $Marca,'Ano'=>$Ano,'Trim'=>$Trim, 'Duenos'=>$Duenos,'Valor_estimado'=>$Valor_estimado]);
            return $request->all();
        }
            return 
            "No se encontro";
        
//    return $dueno;
    }
    public function Eliminarcarro(CarrosEditrequest $request)
    {
        $id = $request->Id_Carro;
        $Carro= carros::find($id);
        
  if($Carro != null){
    $Carro->delete();
    return "Eliminado correctamente ";
  }
      return "No se encontro";
  
    
    }
}
