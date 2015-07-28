<?php
namespace App\Http\Requests\Prueba;
use App\Http\Requests\Request;

class PruebaCreateRequest extends Request{


    public function authorize()
    {
        return true;

    }

    public function rules()
    {
        return [
            'nombre'   => 'required',
            'apellido' => 'required',
            'web'      => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|numeric'
        ];
    }


}