<?php

namespace App\Http\Repositories;

use App\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function ListAndPaginate($search = null, $paginate = 50)
    {
        $qry = User::select('users.id as id', 'users.firstName as firstName', 'users.lastName as lastName' , 'users.country as country', 'profiles.name as name', 'users.estado as estado'            )
            ->orderBy('firstName')
            ->orderBy('lastName')
            //nombre de la tabla a la cual apunta, foreignkey, clave primaria
            ->join('profiles', 'users.id_profile', '=', 'profiles.id' )
            ->firstname($search)
            ->paginate($paginate);

        return $qry;
    }

    public function delete($model)
    {
        return $model->delete();
    }




}