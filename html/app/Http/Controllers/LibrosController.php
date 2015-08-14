<?php
namespace App\Http\Controllers;
use App\Entities\Libro;
use App\Entities\User;

use App\Http\Repositories\LibroRepo;
use App\Http\Repositories\UserRepo;

class LibrosController extends Controller{

    public $vista;
    public $data;
    protected $libroRepo;
    protected $userRepo;

    public function __construct(LibroRepo $libroRepo, UserRepo $userRepo)
    {
       // $this->vista = 'libro.index';
        $this->libroRepo = $libroRepo;
        $this->userRepo  = $userRepo;
       // $this->data['libros'] = $libroRepo->ListaLibro();
    }


    public function index()
    {
        $libros = $this->libroRepo->ListaLibro();
        return view('libro.index', compact('libros'));
    }
        /*  $game = Game::where('id',1)->with('platforms')->get();
           $libros = Libro::join('libros_users', 'libros.id', '=', 'libros_users.libro_id')
                   ->join('users', 'users.id', '=', 'libros_users.user_id')
                   ->select('users.first_name', 'libros.nombre')
                   //->whereIn('users.id', [1, 2, 3])
                   ->get();

           //dd($libros);

          /*Marcas::whereHas('oficina', function($query) {
              $query->where('oficina_id', '!=', $this->id);
          });
          //where('product_id', '=', $product_id)->wherePivot('company_id', $company_id)->get()
          $posts = Comentario::where('post');
          */

        /*$libros = Libro::whereHas('user', function($query) {
            $query->where('user_id', '=', 'id');
        });
        if ($company->activities->find($activity_id)->products()->where('product_id', '=', $product_id)->wherePivot('company_id', $company_id)->get()->count() > 0) {
            // code...
}
        */
        //dd($libros);
        //  return view('libro.index', compact('libros'));
        //}

        function prueba()
        {
            return view('libro.prueba');
        }


    }