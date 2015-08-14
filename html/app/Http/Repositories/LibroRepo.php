<?php
namespace App\Http\Repositories;
use App\Entities\Libro;

class LibroRepo extends BaseRepo{

    public function getModel()
    {
        return new Libro;
    }

    public function ListaLibro()
    {
        $libros = Libro::with('user')->get();

        /*
        $libros = Libro::join('libros_users', 'libros.id', '=', 'libros_users.libro_id')
            ->join('users', 'users.id', '=', 'libros_users.user_id')
            ->select('users.first_name', 'libros.nombre')
            //->whereIn('users.id', [1, 2, 3])
            ->get();*/
        return $libros;
    }
}