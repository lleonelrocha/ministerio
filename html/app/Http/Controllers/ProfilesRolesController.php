<?php

namespace App\Http\Controllers;
use App\Entities\Profile;
use App\Http\Requests\ProfileRoleCreateRequest;
use App\Http\Requests\Request;
use App\Entities\Role;


class ProfilesRolesController extends Controller{


    public function index()
    {
        $perfiles = Profile::with('roles')->get();
        //dd($perfiles);
        return view ('profile.profile_role.index', compact('perfiles', $perfiles));
    }

    public function create()
    {
        $profiles=Profile::All();
        $roles=Role::ALl();
        return view('profile.profile_role.create', compact('profiles', 'roles'));
    }

    public function edit($id)
    {
        // = Profile::find($id);
        //$attribute = [1, 2, 3];
        $profile= Profile::find($id);
        return view('profile.profile_role.edit', compact('profile'));
        // $profiles->roles()->sync(array(1, 2, 3));
        // $this->syncTags($id, $array);
        //Profile::find($id)->roles()->updateExistingPivot($id, array($attribute, TRUE));


    }

    public function store()
    {
        $profiles= Profile::find(2);
        $profiles->roles()->sync(array(3));
        //dd($profiles);
        return 'store';
    }

    public function destroy($id)
    {
        //return 'id: '. $id;
        Profile::find($id)->roles()->detach();
        return redirect()->back();
    }

}