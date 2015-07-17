<?php
namespace App\Http\Requests\Post;
use App\Http\Requests\Request;


class PostEditRequest extends Request {

    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }


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

                'descripcion' => 'required',
                'image' => 'required',
                'titulo' => 'required',

            ];
    }

}
