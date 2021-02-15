<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class PagoProveedor extends Model
{
    protected $fillable = ['no_cuota', 'valor_cuota', 'fecha_cuota', 'no_reciboCaja', 'Valor_pago', 'fecha_pago', 'id_credito_compras', 'saldo', 'userCreate', 'userPago'];
    protected $table = 'pagos_compras';
}
