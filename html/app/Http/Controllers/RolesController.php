<?php
namespace App\Http\Controllers;
use App\Http\Repositories\RoleRepo;
use App\Http\Repositories\Role;
use App\Http\Requests\Role\RoleCreateRequest;
use App\Http\Requests\Role\RoleEditRequest;
use Illuminate\Routing\Route;

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
         return redirect()->back()->with('msg_ok', 'Role creado correctamente');
    }


    public function edit( Route $route)
    {
        $role = $this->roleRepo->find($route->getParameter('id'));
        return view('profile.role.edit', compact('role'));
    }

    public function destroy($id)
    {
        //return 'destroy'. $id;
        $model = $this->roleRepo->find($id);
        $this->roleRepo->delete($model);
        return redirect()->back()->with('msg_ok', 'Role borrado correctamente');

    }

    public function update(RoleEditRequest $request, Route $route)
    {
        $role  = $this->roleRepo->find($route->getParameter('id'));
        $datos = $request->only('name');
        $this->roleRepo->edit($role, $datos);
        return redirect()->back()->with('msg_ok', 'Role editado correctamente');
    }

}