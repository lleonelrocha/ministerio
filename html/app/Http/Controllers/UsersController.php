<?php namespace App\Http\Controllers;

use App\Entities\Profile;
use App\Http\Repositories\UserRepo;
use App\Http\Repositories\PostRepo;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;



class UsersController extends Controller {

	protected $userRepo;
    protected $postRepo;

	public function __construct(UserRepo $userRepo, PostRepo $postRepo)
	{
		//$this->middleware('auth');
        $this->userRepo = $userRepo;
        $this->postRepo = $postRepo;
	}

	public function index(Request $request)
	{
		$users = $this->userRepo->ListAndPaginate($request->get('search'), 10);
		return view('admin.index', compact('users'));
	}

    /*public function index(Request $request)
    {
        $usuario = $this->usuarioRepo->ListAndPaginate(
            $request->get('search'),
            10
        );
        return view('usuarios.usuarios', compact('usuario'));
    }
    */


	public function create()
	{
        $profile = Profile::all();
		return view('admin.create',compact('profile'));
	}

	public function store(UserCreateRequest $request)
	{
        // dd($request->all());
        $datos = $request->only('first_name', 'last_name', 'email', 'password', 'phone_number', 'profile_id');
        //dd($datos);
        $this->userRepo->create($datos);
        return redirect()->back()->with('msg_ok', 'Usuario creado correctamente.');
	}


	public function edit(Route $route)
	{

        $user= $this->userRepo->find($route->getParameter('id'));
		return view('admin.update', compact('user'));
	}


	public function update(UserEditRequest $request, Route $route)
	{
		$user = $this->userRepo->find($route->getParameter('id'));
        $datos = $request->only('first_name', 'last_Name', 'email', 'password', 'phone_number');


        if ($request->get('password') != '')
            $datos['password'] = $request->get('password');

        $user = $this->userRepo->edit($user, $datos);
		return redirect()->back()->with('msg_ok', 'Usuario editado correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user= $this->userRepo->find($id);
        $this->userRepo->delete($user);
		return redirect()->back()->with('msg_ok', 'Usuario borrado correctamente');
    }

    public function show($id)
    {
        $user= $this->userRepo->find($id);
        return view('admin.view', compact('user'));
    }

    public function desactive(Route $route)
    {
        $user = $this->userRepo->find($route->getParameter('id'));
        $user->estado = 1;
        if($user->save())
            return redirect()->back()->with('msg_ok', 'Usuario activado correctamente');
    }

    public function active(Route $route)
    {
        $user = $this->userRepo->find($route->getParameter('id'));
        $user->estado = 0;
        if($user->save())
            return redirect()->back()->with('msg_ok', 'Usuario desactivado correctamente');;
    }



}
