<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function resultados(Request $request){

        return response()->json([
            'candidato'=>$request->user()->candidato,
            'resultado'=>$request->user()->resultado]);
    }
}
