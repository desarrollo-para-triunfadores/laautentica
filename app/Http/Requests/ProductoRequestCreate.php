<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequestCreate extends Request
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
            'nombre' => 'required|max:20|unique:productos',
            'marca_id' => 'required', 
            'tipoproducto_id' => 'required', 
            'localidad_id' => 'required', 
            'descripcion' => 'max:1000',      
            'imagen' => 'mimes:jpeg,png|required|max:3072'
        ];
    }
}
