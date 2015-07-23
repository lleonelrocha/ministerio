<?php
namespace App\Http\Requests\Comentario;
use App\Http\Requests\Request;



class ComentarioCreateRequest extends Request {

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
        return
            [
                'nombre'   => 'required',
                'apellido' => 'required',
                'texto'    => 'required',
                'post_id'  => 'required',

            ];
    }

}
