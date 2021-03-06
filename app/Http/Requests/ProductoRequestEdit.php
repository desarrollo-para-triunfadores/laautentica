<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class ProductoRequestEdit extends Request
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
            'nombre' => 'required|max:100|unique:productos,nombre,'.$this->route->getParameter('productos'),
            'marca_id' => 'required', 
            'tipoproducto_id' => 'required', 
            'localidad_id' => 'required', 
            'descripcion' => 'max:1000',      
            'imagen' => 'mimes:jpeg,png|max:3072'
        ];
    }
}
