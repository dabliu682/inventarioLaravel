<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nombre', 'userCreate' ];
    protected $table = 'marcas';

    public function producto()
    {
        return $this->hasMany('App\modelos\Producto');
    }
}
