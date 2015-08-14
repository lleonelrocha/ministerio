<?php
namespace App\Http\Repositories;
use App\Entities\Sexo;

class SexoRepo extends BaseRepo{


    public function getModel()
    {
        return new Sexo;
    }

}