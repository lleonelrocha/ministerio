<?php
namespace App\Http\Controllers;
use App\Entities\Pelicula;
use App\Http\Repositories\PeliculaRepo;
use App\Http\Requests\Prueba\PruebaCreateRequest;
use Illuminate\Http\Request;
use App\Entities\Prueba;
use App\Entities\Comentario;
use App\Entities\Post;
use App\Entities\User;
use App\Http\Repositories\ComentarioRepo;
use App\Http\Repositories\PruebaRepo;
use App\Http\Repositories\PostRepo;


class PruebaController extends Controller{


    protected $pruebaRepo;
    protected $comentarioRepo;
    protected $postRepo;
    protected $peliculaRepo;

    public function __construct(PruebaRepo $pruebaRepo, ComentarioRepo $comentarioRepo,PostRepo $postRepo, PeliculaRepo $peliculaRepo )
    {
          $this->comentarioRepo = $comentarioRepo;
          $this->pruebaRepo     = $pruebaRepo;
          $this->postRepo       = $postRepo;
          $this->peliculaRepo   = $peliculaRepo;
    }

    public function usuario()
    {
        $usuarios = User::with('profile', 'post', 'sexo','libro')->get();
        // dd($usuarios);
        return view('prueba.usuario', compact('usuarios'));

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

        /*$posts = Post::whereHas('comments', function ($query) {
            $query->where('content', 'like', 'foo%');
        })->get();
        */
        /* public function ListAndPaginateRecibidos($search = null, $paginate = 20) {

             $qry = $this->model->orderBy('fecha_recepcion', 'desc')
            ->where('user_receptor',Auth::user()->usuario)
            ->where('estado','recibido')
            ->orWhereHas('expediente',function($q) use($search){
                $q->where('id_sisex','=',$search);
            })
            ->orWhereHas('remito',function($q) use($search){
                $q->where('numero','=',$search);
            })
            ->orWhereHas('sectorRemitente',function($q) use($search){
                $q->where('nombre','=',$search);
            })
            ->paginate($paginate);
        */

        //where('product_id', '=', $product_id)->wherePivot('company_id', $company_id)->get()
        $posts = User::with('post')->get();
        //$posts = Comentario::with('post')->get();
        dd($posts);
    }

    public function edit()
    {
        $posts = Comentario::with('post')->where('post_id', 1)->get();
        dd($posts);
    }

    public function peliculas()
    {
        //$pelicula = $this->peliculaRepo->listing();
        //$max = App\Flight::where('active', 1)->max('price');
        $id=1;
        $drama= 'Drama';
        $pelicula = Pelicula::count();

        dd($pelicula);
        return view('prueba.pelicula', compact('pelicula'));
    }

    public function hora()
    {
        return date('d-m-Y H:i:s');
    }

    public function traerPelicula($id)
    {
        $peli = $this->peliculaRepo->find($id);
        return json_encode($peli);

    }

    /* public function search(Request $request)
    {
        if($request->ajax()){
            $dato=$request->input('search'); //Aqui obtienes el valor del input ajax

            return Response::json($dato);
        }
    }

    */
}