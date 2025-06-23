<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Models
{
    protected $table = 'categorias';

    protected $fillable = [
        'descricao',
    ];
}