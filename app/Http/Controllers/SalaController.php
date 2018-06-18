<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\User;
class SalaController extends Controller
{
    private $cadidato_controller;

    function __construct(CandidatoController $cadidato_controller){

        $this->cadidato_controller = $cadidato_controller;
    }

    public function salas(Request $request){
               return response()->json([
                   'candidato'=>$request->user()->candidato,
                   'sala'=>$request->user()->sala]);
    }
}