<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraRequest extends FormRequest
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

            'fecha' => 'required',
            'no_comprobante' => 'required',
            'tipo' => 'required',
            'total' => 'required',
            'forma_pago' => 'required',
            'descripcion' => 'required',
            'userCreate' => 'required',
            'credito' => 'required',
        ];
    }
}
