<?php
namespace App\Http\Repositories;
use App\Entities\Role;


class RoleRepo extends BaseRepo
{

    public function getModel()
    {
        return new Role();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function listRole()
    {
        $qry= Role::all();
        return $qry;
    }



}
