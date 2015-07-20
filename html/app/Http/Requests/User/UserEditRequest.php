<?php
namespace App\Http\Requests\User;
use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UserEditRequest extends Request {

    protected $route;

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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $this->route->getParameter('id'),
            'password' => 'max:255',
            'phone_number' => 'max:255',
            //'profile_id'=>'required',
            'imageUrl' => 'max:255'
		];
	}

}
