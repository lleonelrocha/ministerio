<?php namespace App\Http\Controllers;
use App\Http\Repositories\RoleRepo;

class RolesController extends Controller {

    protected $roleRepo;

    public function __construct(RoleRepo $roleRepo)
    {
        //$this->middleware('auth');
        $this->roleRepo = $roleRepo;
    }

    public function index()
    {
        return 'return index';
    }

    public function create()
    {
        return 'vista crear role';
    }

    public function store()
    {
        return 'store';
    }

    public function edit()
    {
        return 'vista editando';
    }

    public function update()
    {
        return 'guardando datos';
    }

}