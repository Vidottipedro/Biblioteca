<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Models
{
    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];
}