<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $fillable = [
        'user_id',
        'disciplina1',
        'nota1',
        'disciplina2',
        'nota2',
        'media',
        'observacao',
        'resultado'
    ];

    protected $table = 'resultados';

}
