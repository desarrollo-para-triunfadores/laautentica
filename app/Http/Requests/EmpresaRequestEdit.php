<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EmpresaRequestEdit extends Request
{
    
    public function __construct(Route $route)
    {
        $this->route = $route;
    }

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
            'nombre' => 'required|max:100|unique:empresas,nombre,'.$this->route->getParameter('empresas'),
            'celular' => 'max:30',
            'telefono' => 'max:30',
            'calle' => 'required|max:50',
            'altura' => 'required|max:10',
            'localidad_id' => 'required',
            'rubro_id' => 'required',
            'email' => 'email|max:100',
            'web'  => 'active_url|max:100',
            'imagen' => 'mimes:jpeg,png|max:3072'     
        ];
    }
}
