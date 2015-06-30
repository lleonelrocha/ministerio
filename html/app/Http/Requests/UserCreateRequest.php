<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request {

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
			'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:255',
            'phoneNumber' => 'max:255',
            'country' => 'required|max:255',
            'state' => 'required|max:255',
            'id_profile' => 'required',
            'imageUrl' => 'max:255'
		];
	}

}
