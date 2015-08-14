<?php

namespace App\Http\Repositories;
use App\Entities\Pelicula;
use Illuminate\Http\Request;

class PeliculaRepo extends BaseRepo{

    public function getModel()
    {
        return new Pelicula;
    }

    public function listing()
    {
        $qry = Pelicula::all();
        return $qry;
    }

    public function listAndPaginate()
    {
        $qry = Pelicula::all()
            ->paginate(10);
        return $qry;
    }



}