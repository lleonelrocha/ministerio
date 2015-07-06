<?php

namespace App\Http\Controllers;
use App\Http\Repositories\ProfileRepo;


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
        // dd($profiles);
        return view('profile.profile.index' ,compact('profiles'));
    }

    public function create()
    {
         return 'crear';
    }

    public function store()
    {
         return 'guardado nuevo perfil';
    }

    public function update()
    {
        return 'datos recibidos';
    }

    public function edit()
    {
        return 'edit' ;
    }



}