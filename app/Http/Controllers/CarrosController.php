<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carros;

class CarrosController extends Controller
{
    public function Crearcarro(Request $request)
    {
           $carros = new carros();
           $carros->Marca = $request->Marca;
           $carros->Modelo= $request->Modelo;
           $carros->Ano= $request->Ano;
           $carros->Trim= $request->Trim;
           $carros->Duenos= $request->Duenos;
           $carros->Valor_estimado= $request->Valor_estimado;
      
           
           if($carros->save()){
               return json_encode("Carro agregado correctamente");
           }else{
               return $carros->toJson();
           }
           return $carros->toJson();
    }
    public function Obtenertodoscarros()
    {
        $carros  =  carros::all();
        return $carros->toJson();
    }

    public function Obtenercarro($id)
    {
        $carros = find($id);

    }
    public function Editarcarros()
    {

    }
    public function Eliminarcarro()
    {
        
    }
}
