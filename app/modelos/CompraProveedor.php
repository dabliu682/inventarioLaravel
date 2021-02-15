<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class CompraProveedor extends Model
{
    protected $fillable = [ 'fecha', 'no_comprobante', 'tipo', 'total', 'forma_pago', 'descripcion', 'userCreate', 'credito' ];
    protected $table = 'compras';
}
