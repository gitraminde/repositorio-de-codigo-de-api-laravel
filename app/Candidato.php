<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'id',
        'name',
        'apelido',
        'bIdentidade',
        'nrCandidato',
        'delegacao',
        'regime',
        'curso',
        'user_id'
    ];

    protected  $table = 'candidatos';

    public function sala()
    {
        return $this->hasOne('App\Sala');

    }

}
