<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'id',
        'disciplina',
        'local',
        'sala',
        'candidato_id'
    ];

    protected $table = 'salas';
}
