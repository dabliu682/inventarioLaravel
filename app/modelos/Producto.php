<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'id_categorias', 'id_marca', 'id_ubicacion', 'estado', 'id_proveedores', 'valor_entrada', 'valor_salida', 'descripcion', 'userCreate'];
    protected $table = 'productos';

    public function categorias(){ return $this->belongsTo('App\modelos\Categoria','id_categorias');}

    public function marcas(){ return $this->belongsTo('App\modelos\Marca','id_marca');}

    public function estantes(){ return $this->belongsTo('App\modelos\Estante','id_ubicacion');}

    public function proveedores(){ return $this->belongsTo('App\modelos\Proveedor','id_proveedores');}
}
