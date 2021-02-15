<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre', 'userCreate', 'id_linea' ];
    protected $table = 'categorias';

    public function lineas(){
        
        return $this->belongsTo('App\modelos\Linea','id_linea');
    }

    public function producto()
    {
        return $this->hasMany('App\modelos\Producto');
    }

    

    

    
}

