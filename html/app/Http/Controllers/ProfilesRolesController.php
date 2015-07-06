<?php
namespace App\Http\Controllers;
use App\Http\Repositories\ProfileRepo;
use App\Http\Repositories\RoleRepo;



class ProfilesRolesController extends Controller {

    protected $profileRepo;

    public function __construct(ProfileRepo $profileRepo)
    {
        //$this->middleware('auth');
        $this->profileRepo = $profileRepo;
    }

    public function index()
    {

        $qry = $this->profileRepo->ListProfile();
        //$profiles = $qry->roles;
        // dd($profiles->roles);
        // dd($profile->roles);
        // $profiles = '';
        // dd($profiles);

    }


}