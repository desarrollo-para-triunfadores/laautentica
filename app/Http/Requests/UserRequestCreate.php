<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequestCreate extends Request
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
            'nombre' => 'required|max:15',
            'apellido' => 'required|max:15',
            'email' => 'required|email|max:40|unique:users',
            'password' => 'required|min:6|confirmed',           
        ];
    }
}
