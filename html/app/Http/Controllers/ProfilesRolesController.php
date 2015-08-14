<?php

namespace App\Http\Controllers;
use App\Entities\Profile;
use App\Entities\Role;
use Illuminate\Http\Request;
use Input;


class ProfilesRolesController extends Controller{


    public function index()
    {
        $perfiles = Profile::with('roles')->get();
        /*$perfiles = Profile::join('profiles_roles', 'profiles.id', '=', 'profiles_roles.profile_id')
            ->join('roles', 'roles.id', '=', 'profiles_roles.role_id')
            ->select('profiles.name', 'roles.name')
            ->toSql();
        */
        /*$libros = Libro::join('libros_users', 'libros.id', '=', 'libros_users.libro_id')
            ->join('users', 'users.id', '=', 'libros_users.user_id')
            ->select('users.first_name', 'libros.nombre')
            ->whereIn('users.id', [1, 2, 3])
            ->get();
        */
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
        $profile= Profile::find($id)->with('roles');
        dd($profile);
        return view('profile.profile_role.edit', compact('profile'));
        // $profiles->roles()->sync(array(1, 2, 3));
        // $this->syncTags($id, $array);
        //Profile::find($id)->roles()->updateExistingPivot($id, array($attribute, TRUE));
    }

    public function store (Request $request)
    {
        //dd($request->all());
        $array = (Input::except('profile_id', '_token'));
        $profiles = Profile::find($request->input('profile_id'));
        //($profiles->roles());
        $profiles->roles()->sync(($array));
        return redirect()->back()->with('msg_ok', 'ProfileRole creado correctamente');
        //$profiles->roles()->detach($array);
        //$array = (Input::except('profile_id', '_token'));
        //$profiles->roles()->sync(array($array));
        //dd($_REQUEST->all());


        // $user = App\User::find(1);
        //  $user->roles()->detach([1, 2, 3]);
        // $profiles = Profile::find($id);
        // $profiles->roles()->sync(array(1, 2, 3));

    }

    /*public function store(Request $request)
    {

        //dd($request->all());
        $profiles->roles()->sync(array(1, 2, 3));
        $profiles= Profile::find($request->input('profile_id'));
        $profiles->roles()->sync(array($request->all()));
        //dd($profiles);
        return 'store';
    }
    */

    public function destroy($id)
    {
        //return 'id: '. $id;
        Profile::find($id)->roles()->detach();
        return redirect()->back()->with('msg_ok', 'ProfileRole vaciado correctamente');
    }

}