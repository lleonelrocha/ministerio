<?php
namespace App\Http\Repositories;
use App\Entities\Prueba;

class PruebaRepo extends BaseRepo{

    public function getModel()
    {
        return new Prueba;
    }


}