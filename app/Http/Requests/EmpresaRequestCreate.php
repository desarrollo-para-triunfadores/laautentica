<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmpresaRequestCreate extends Request
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
            'nombre' => 'required|max:20|unique:empresas',
            'celular' => 'required|max:20',
            'telefono' => 'required|max:20',
            'calle' => 'required|max:30',
            'altura' => 'required|max:10',
            'localidad_id' => 'required',
            'rubro_id' => 'required',
            'email' => 'required|email|max:40',         
            'imagen' => 'mimes:jpeg,png|max:3072'
        ];
    }
}
