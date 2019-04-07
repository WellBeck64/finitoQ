<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicidade extends Model
{
    protected $fillable = [
        'id',
        'foto',
        'titulo',
        'descricacao',
        'idCliente'
    ];
}
