<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{    
    protected $fillable = ['identificacion', 'nombre', 'telefono', 'email', 'ciudad', 'no_cuenta', 'banco', 'tipo_cuenta', 'nombre_cuenta', 'userCreate'];

    protected $table = 'proveedores'; 

    public function producto(){ return $this->hasMany('App\modelos\Producto'); }
}
