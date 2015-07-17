<?php
namespace App\Http\Requests\Role;
use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class RoleEditRequest extends Request {

    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
            'name' => 'required|max:255',

        ];
	}

}
