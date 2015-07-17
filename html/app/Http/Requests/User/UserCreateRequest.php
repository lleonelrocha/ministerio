<?php
namespace App\Http\Requests\User;
use App\Http\Requests\Request;


class UserCreateRequest extends Request {

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:255',
            'phone_number' => 'max:255',
            'profile_id' => 'required'

		];
	}

}
