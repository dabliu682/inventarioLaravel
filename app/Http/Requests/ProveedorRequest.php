<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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

            'identificacion' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'no_cuenta' => 'required',
            'banco' => 'required',
            'tipo_cuenta' => 'required',
            'nombre_cuenta' => 'required',
            'userCreate' => 'required',
            'email' => 'nullable',
            
        ];
    }
}
