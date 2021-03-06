<?php
namespace App\Http\Requests\Post;
use App\Http\Requests\Request;



class PostCreateRequest extends Request {

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
            //'user_id'=>'required',
            'user_id' => 'required',
            'descripcion' => 'required',
            'image' => 'required',
            'titulo' => 'required',

        ];
    }

}
