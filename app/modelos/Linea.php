<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $fillable = ['nombre', 'userCreate' ];
    protected $table = 'lineas';

    public function categoria()
    {
        return $this->hasMany('App\modelos\Categoria');
    }
}

