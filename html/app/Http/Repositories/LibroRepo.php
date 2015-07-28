<?php
namespace App\Http\Repositories;
use App\Entities\Libro;

class LibroRepo extends BaseRepo{

    public function getModel()
    {
        return new Libro;
    }
}