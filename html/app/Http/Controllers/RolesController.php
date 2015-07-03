<?php

namespace App\Http\Controllers;
use App\Http\Repositories\RoleRepo;


class RolesController extends Controller
{

    protected $roleRepo;

    public function __construct(RoleRepo $roleRepo)
    {
        //$this->middleware('auth');
        $this->roleRepo = $roleRepo;
    }



    public function index()
    {
     return 'vista index';

    }


}