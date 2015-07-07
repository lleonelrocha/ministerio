<?php

namespace App\Http\Controllers;
use App\Entities\Profile;
use App\Http\Repositories\ProfileRepo;
use App\Http\Requests\ProfileCreateRequest;
use App\Http\Requests\Request;


class ProfilesController extends Controller {

    protected $profileRepo;

    public function __construct(ProfileRepo $profileRepo)
    {
        //$this->middleware('auth');
        $this->profileRepo = $profileRepo;
    }


    public function index()
    {
        $profiles = $this->profileRepo->ListProfile();
        // $profiles = $qry->roles;
        // dd($profile->roles);
        // $profiles = '';
        //dd($profiles);
        return view('profile.profile.index' ,compact('profiles'));
    }

    public function create()
    {
         return 'crear';
    }

    public function store(ProfileCreateRequest $request)
    {
        $datos = $request->only('name');
        $this->profileRepo->create($datos);
        return redirect()->back();
        //return 'guardado nuevo perfil';
    }

    public function update()
    {
        return 'datos recibidos';
    }

    public function edit($id)
    {
        $profile= $this->profileRepo->find($id);
        return view('profile.profile.edit', compact('profile'));
    }


    public function profile_role()
    {
        $profiles = Profile::find(1);
        //$profiles = Profile::find(1);
        //dd($profiles->roles);
        return view('profile.profile_role.index',compact('profiles'));




         //$profile= Profile::all();
         //$pro_rol = $profile->roles;
         //dd($pro_rol);
         // $profiles = $qry->roles;
         // dd($profile->roles);

    }


    public function destroy($id)
    {

        $model= $this->profileRepo->find($id);
        $this->profileRepo->delete($model);
        return redirect()->back();


    }



}