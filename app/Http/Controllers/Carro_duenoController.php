<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Obtenerduenoporidcarrorequest;
use App\Http\Requests\Obtenercarroidduenorequest;

class Carro_duenoController extends Controller
{
    public function Obtenerduenoidcarro(Obtenerduenoporidcarrorequest $request)
    {
        $id = $request->Id_Carro;
        $duenos = DB::table('dueno')
        ->join('carros', 'carros.Id_Carro', '=', 'dueno.Carros')  
        ->where('carros.Id_Carro',$id)
        ->select('dueno.*')
        ->get();
        if(!empty($duenos))
        return $duenos;
         
            return "No se encontro en la base de datos";
    }
    public function Obtenercarroiddueno(Obtenercarroidduenorequest $request)
    {
        $id = $request->id_dueno;
        $carros = DB::table('carros')
        ->join('dueno', 'carros.Duenos', '=', 'dueno.id_dueno')  
        ->where('carros.Duenos',$id)
        ->select('carros.*')
        ->get();
        if(!empty($carros))
        return $carros;
        
        return "No se encontro en la base de datos";
    }
    public function Eliminarduenoycarro(Obtenercarroidduenorequest $request)
    {
        $id = $request->id_dueno;
        $dueno = DB::table('dueno')->where('id_dueno', $id)->delete();
        $carro = DB::table('carros')->where('Duenos', $id)->delete();
        if($dueno and $carro == true)
            return "Se Elimino el dueño y todos Sus carros correctamente";
        
        return "No se pudo eliminar";
    }
}
