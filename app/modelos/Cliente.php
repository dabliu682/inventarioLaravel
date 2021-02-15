<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['identificacion', 'nombre', 'telefono', 'direccion', 'userCreate' ];
}
