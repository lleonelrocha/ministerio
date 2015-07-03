<?php

namespace App\Http\Controllers;
use App\Http\Repositories\ProfileRepo;
use App\Http\Repositories\RoleRepo;

class ProfilesController extends Controller {

    protected $profileRepo;

    public function __construct(ProfileRepo $profileRepo)
    {
        //$this->middleware('auth');
        $this->profileRepo = $profileRepo;
    }


    public function index()
    {
        $profile = $this->profileRepo->find(1);
        dd($profile->roles);
        $profiles = '';
        // dd($profiles);
        return view('profile.index' ,compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

     public function store()
     {
            return 'guardado nuevo perfil';
     }




}