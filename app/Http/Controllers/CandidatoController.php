<?php

namespace App\Http\Controllers;

use App\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function candidatos( $user){

        return Candidato::find($user);
    }
}
