<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Carro_duenoController extends Controller
{
public function Obtenerduenoidcarro(Request $request)
{
    $id = $request->id;
    $duenos = DB::table('dueno')
    ->join('carros', 'carros.Duenos', '=', 'dueno.Carros')  ->where('carros.Id_Carro',$id)
    ->select('dueno.*')
    ->get();
    return $duenos;
}
}
