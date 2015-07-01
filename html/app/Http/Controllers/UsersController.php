<?php namespace App\Http\Controllers;

use App\Http\Repositories\UserRepo;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class UsersController extends Controller {

	protected $userRepo;

	public function __construct(UserRepo $userRepo)
	{
		//$this->middleware('auth');
        $this->userRepo = $userRepo;
	}

	public function index(Request $requests)
	{
		$users = $this->userRepo->ListAndPaginate(
            $requests->get('search'),
            15
        );

		return view('admin.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create');
	}

	public function store(UserCreateRequest $request)
	{
        $datos = $request->only('first_name', 'last_Name', 'email', 'password', 'phone_number', 'profile_id');
       // dd($datos);
        $user = $this->userRepo->create($datos);

        return redirect()->back()->with('msg_ok', 'Usuario creado correctamente.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Route $route)
	{
        $user= $this->userRepo->find($route->getParameter('id'));
		return view('admin.update', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserEditRequest $request, Route $route)
	{

		$user = $this->userRepo->find($route->getParameter('id'));
        $datos = $request->only('first_name', 'last_Name', 'email', 'password', 'phone_number', 'profile_id');


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


    public function desactive($id)
    {
        return 'desactive: '. $id ;
        //$user= $this->userRepo->find($id);

    }

    public function active($id)
    {
        return 'active '. $id;

    }


}
