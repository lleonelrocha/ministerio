<?php
namespace App\Http\Controllers;


use App\Http\Repositories\PostRepo;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostEditRequest;
use Illuminate\Routing\Route;
use Auth;


class PostsController extends Controller {

    protected $postRepo;

    public function __construct(PostRepo $postRepo )
    {
        $this->postRepo = $postRepo;
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
}
