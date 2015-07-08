<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;


class ProfileRoleCreateRequest extends Request {


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'profile_id' => 'required',
            'role_id' => 'required'
        ];
    }

}
