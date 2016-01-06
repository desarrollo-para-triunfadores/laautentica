<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Tipo_ProductoRequestEdit extends Request
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
             'nombreTipo' => 'required|max:30|unique:tiposproductos, nombreTipo,'.$this->route->getParameter('tipos_productos')
        ];
    }
}
