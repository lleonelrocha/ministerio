<?php
namespace App\Http\Controllers;
use App\Http\Repositories\RoleRepo;
use App\Http\Requests\Request;
use App\Http\Requests\role\RoleCreateRequest;


class RolesController extends Controller {

    protected $roleRepo;

    public function __construct(RoleRepo $roleRepo)
    {
        //$this->middleware('auth');
        $this->roleRepo = $roleRepo;
    }

    public function index()
    {
        $roles= $this->roleRepo->listRole();
        return view('profile.role.index', compact('roles'));
    }


    public function store(RoleCreateRequest $request)
    {
        // dd($request);
        // $datos = $request->only('name');
        // $this->roleRepo->create($datos);
        // return redirect()->back();
    }


    public function edit()
    {
        return 'profile.role.edit';
    }

    public function update()
    {
        return 'guardando datos';
    }

}