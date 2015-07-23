<?php
namespace App\Http\Controllers;
use App\Http\Repositories\PostRepo;
use App\Http\Repositories\ComentarioRepo;
use App\Http\Requests\Comentario\ComentarioCreateRequest;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostEditRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Auth;

class PostsController extends Controller {

    protected $postRepo;
    protected $comentarioRepo;

    public function __construct(PostRepo $postRepo, ComentarioRepo $comentarioRepo )
    {
        $this->postRepo = $postRepo;
        $this->comentarioRepo = $comentarioRepo;
    }

    public function index()
    {
        $user_id=(Auth::user()->iduser);
        $posts = $this->postRepo->ListPost($user_id);
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
}
