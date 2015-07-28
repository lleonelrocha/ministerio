<?php
namespace App\Http\Controllers;
use App\Http\Requests\Prueba\PruebaCreateRequest;
use Illuminate\Http\Request;
use App\Entities\Prueba;
use App\Entities\Comentario;
use App\Entities\Post;
use App\Http\Repositories\ComentarioRepo;
use App\Http\Repositories\PruebaRepo;
use App\Http\Repositories\PostRepo;


class PruebaController extends Controller{


    protected $pruebaRepo;
    protected $comentarioRepo;
    protected $postRepo;

    public function __construct(PruebaRepo $pruebaRepo, ComentarioRepo $comentarioRepo,PostRepo $postRepo )
    {
          $this->comentarioRepo = $comentarioRepo;
          $this->pruebaRepo     = $pruebaRepo;
          $this->postRepo       = $postRepo;
    }

    public function index()
    {
        return view('prueba.index');
    }

    public function store(PruebaCreateRequest $request)
    {
        //$datos = $request->only('user_id', 'descripcion', 'image', 'titulo');
        $datos = $request->only('nombre', 'apellido', 'web', 'email', 'password');
        $this->pruebaRepo->create($datos);

    }

    public function create()
    {
        $prueba = Prueba::findOrFail(NULL);
        dd($prueba);

        return 'crear';
    }

    public function edit()
    {
        //$comentario = Comentario::where('id', '=' ,1)->get();
        //dd(Comentario::all()->count());

        $post = Post::find(2);
        dd($post->comentario);

        return 'editar';
    }

}