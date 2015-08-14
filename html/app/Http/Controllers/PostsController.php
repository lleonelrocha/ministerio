<?php
namespace App\Http\Controllers;
use App\Http\Repositories\PostRepo;
use App\Http\Repositories\ComentarioRepo;
use App\Http\Repositories\UserRepo;

use App\Http\Requests\Comentario\ComentarioCreateRequest;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostEditRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Auth;

class PostsController extends Controller {

    protected $postRepo;
    protected $comentarioRepo;
    protected $userRepo;

    public function __construct(PostRepo $postRepo, ComentarioRepo $comentarioRepo, UserRepo $userRepo )
    {
/*      $this->vista = 'post.index';
        $this->vista = 'post.create';
        $user_id=(Auth::user()->iduser);
        $this->data['posts'] = $postRepo->ListPost($user_id,$request->get('search'));
*/
        $this->postRepo = $postRepo;
        $this->comentarioRepo = $comentarioRepo;
        $this->userRepo = $userRepo;
    }

    /*public function index(Request $request)
	{
		$users = $this->userRepo->ListAndPaginate($request->get('search'), 10 );
		return view('admin.index', compact('users'));
	}
    */

    public function index(Request $request)
    {
        $user_id =(Auth::user()->iduser);
        $posts   = $this->postRepo->ListPost($user_id,$request->get('search') );
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view ('post.create');
    }

    public function store(PostCreateRequest $request)
    {
        $datos = $request->only('user_id', 'descripcion', 'image', 'titulo');
        $this->postRepo->create($datos);
        return redirect()->back()->with('msg_ok', 'Post creado correctamente');
    }

    public function edit(Route $route)
    {
        $post = $this->postRepo->find($route->getParameter('id'));
        //$post = $this->postRepo->find($id);
        //dd($post);
        return view('post.edit', compact('post'));
    }

    public function update(PostEditRequest $request, Route $route)
    {
        $post  = $this->postRepo->find($route->getParameter('id'));
        $datos = $request->only('descripcion', 'image', 'titulo');
        $this->postRepo->edit($post, $datos);
        return redirect()->back()->with('msg_ok', 'Post editado correctamente');
    }

    public function destroy($id)
    {
        $post = $this->postRepo->find($id);
        $this->postRepo->delete($post);
        return redirect()->back()->with('msg_ok', 'Post borrado correctamente');
    }

    public function probar($id)
    {
        $post = $this->postRepo->find($id);
        dd($post);
        return 'probar';
    }

    public function view($id)
    {
        $post = $this->postRepo->find($id);
        $comentarios = $this->comentarioRepo->ListComentario($id);
        return view('post.view', compact('post', 'comentarios'));
    }

    public function comentarioStore(ComentarioCreateRequest $request)
    {
        $datos = $request->only('nombre', 'apellido', 'texto', 'post_id');
        $this->comentarioRepo->create($datos);
        return redirect()->back()->with('msg_ok', 'Comentario creado correctamente');
    }

    public function usuario()
    {
        $user = $this->userRepo->find(Auth::user()->iduser);
        return view('post.usuario', compact('user'));
    }

    public function usuarioUpdate(Request $request, Route $route)
    {
        $user=$this->userRepo->find(Auth::user()->iduser);
        $this->userRepo->edit($user, $request->all());

    }

    public function desactivar()
    {
        $user=$this->userRepo->find(Auth::user()->iduser);
        $user->estado=1;
        if($user->save())
            return redirect()->back()->with('msg_ok', 'Tu cuenta se ha desactivado correctamente');
    }

    /*
     public function desactive(Route $route)
    {
        $user = $this->userRepo->find($route->getParameter('id'));
        $user->estado = 1;
        if($user->save())
            return redirect()->back()->with('msg_ok', 'Usuario desactivado correctamente');
    }
    */

    public function amigos()
    {
        return view('posts.amigos');
    }

    public function buscar()
    {
        return 'buscar';
    }
}
