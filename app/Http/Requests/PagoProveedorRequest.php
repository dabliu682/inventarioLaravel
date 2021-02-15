<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoProveedorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'no_cuota' => 'require',
            'valor_cuota' => 'required',
            'fecha_cuota' => 'required',
            'no_reciboCaja' => 'nullable',
            'Valor_pago' => 'nullable',
            'fecha_pago'=> 'nullable',
            'id_credito_compras'=> 'nullable',
            
        ];
    }
}
