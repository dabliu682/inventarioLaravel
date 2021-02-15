<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    protected $fillable = ['nombre', 'userCreate', 'filas' ];
    protected $table = 'estantes';

    public function producto()
    {
        return $this->hasMany('App\modelos\Producto');
    }
}
