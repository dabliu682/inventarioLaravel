<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class CreditoProveedor extends Model
{
    protected $fillable = ['valor_cuota','userCreate', 'estado', 'saldo','fechaFin','fechaInicio', 'id_compras','abono', 'no_cuotas', 'plazoDias'];
    protected $table = 'creditos_compras';
}
