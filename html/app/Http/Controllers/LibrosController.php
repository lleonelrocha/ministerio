<?php
namespace App\Http\Controllers;
use App\Entities\Libro;
use App\Entities\User;

use App\Http\Repositories\LibroRepo;

class LibrosController extends Controller{


    protected $libroRepo;

    public function __construct(LibroRepo $libroRepo)
    {
        $this->libroRepo = $libroRepo;
    }

   /* $perfiles = Profile::with('roles')->get();
        //dd($perfiles);
    return view ('profile.profile_role.index', compact('perfiles', $perfiles));
   */

    public function index()
    {
        $libros = Libro::with('user')
        ->orderBy('id', 'desc')
        ->get();
        //dd($libros);
        return view('libro.index', compact('libros'));
    }

    public function prueba()
    {
        return view('libro.prueba');
    }

}