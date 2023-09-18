<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;
class BebidaController extends Controller
{


    public function Listar(Request $request){
        return Bebida::all();
    }   

    public function Obtener(Request $request, $idBebida){
        return Bebida::findOrFail($idBebida);
    }

    public function Crear(Request $request){
        $bebida = new Bebida();
        $bebida->nombre = $request->nombre;
        $bebida->tipo = $request->tipo;
        $bebida->capacidad = $request->capacidad;
        $bebida->precio = $request->precio;
        $bebida->save();
        return $bebida;
    }

    public function Borrar(Request $request, $idBebida){
        $bebida = Bebida::findOrFail($idBebida);
        $bebida->delete();
        return [ "resultado" => "Bebida borrada"];
    }

    public function Actualizar(Request $request, $idBebida){
        $bebida = Bebida::findOrFail($idBebida);
        $bebida->nombre = $request->nombre;
        $bebida->tipo = $request->tipo;
        $bebida->capacidad = $request->capacidad;
        $bebida->precio = $request->precio;
        $bebida->save();
        return $bebida;
    }
}
