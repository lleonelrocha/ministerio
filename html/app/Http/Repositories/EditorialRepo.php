<?php
namespace App\Http\Repositories;
use App\Http\Editorial;

class EditorialRepo extends BaseRepo{

    public function getModel()
    {
        return new Editorial;
    }

}