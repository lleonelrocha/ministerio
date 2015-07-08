<?php

namespace App\Http\Controllers;
use App\Entities\Profile;
use App\Http\Requests\ProfileRoleCreateRequest;
use App\Http\Requests\Request;
use App\Entities\Role;

class ProfilesRolesController extends Controller{



    public function index()
    {
        return view('profile.profile_role.index');
    }

    public function create()
    {
        $profiles=Profile::All();
        $roles=Role::ALl();
        return view('profile.profile_role.create', compact('profiles', 'roles'));
    }

    public function edit()
    {
        return 'edit';
    }

    public function store()
    {
        $profiles= Profile::find(2);
        $profiles->roles()->sync(array(1, 2, 4));
         //dd($profiles);

           return 'store';
    }



}