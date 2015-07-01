<?php
namespace App\Http\Repositories;
use App\Entities\Roles;


class RolesRepo extends BaseRepo
{

    public function getModel()
    {
        return new Roles();
    }
}
