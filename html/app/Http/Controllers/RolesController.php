<?php
namespace App\Http\Controllers;
use App\Http\Repositories\RoleRepo;
use App\Http\Repositories\Role;
use App\Http\Requests\Request;
use App\Http\Requests\Post\RoleCreateRequest;
use App\Http\Requests\Post\RoleEditRequest;


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

         $datos = $request->only('name');
         $this->roleRepo->create($datos);
         return redirect()->back();
    }


    public function edit($id)
    {
        $role = $this->roleRepo->find($id);
        return view('profile.role.edit', compact('role'));
    }

    public function destroy($id)
    {
        //return 'destroy'. $id;
        $model = $this->roleRepo->find($id);
        $this->roleRepo->delete($model);
        return redirect()->back();

    }

    public function update(RoleEditRequest $request)
    {
        dd($request->all());
        return 'guardando datos';
    }

}