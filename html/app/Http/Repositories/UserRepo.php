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

      /* $qry = User::select('users.id as id', 'users.first_name as first_name', 'users.last_name as last_name' , 'profiles.name as name' )
            ->orderBy('first_name')
            ->orderBy('last_name')
            //nombre de la tabla a la cual apunta, foreignkey, clave primaria
            ->join('profiles', 'users.profile_id', '=', 'profiles.id' )
            ->firstname($search)
            ->paginate($paginate);
            return $qry;
      */

        //$user = User::find(2);
        $qry= User::with('profile')
            ->first_name($search)
            ->paginate($paginate);
            return $qry;
            //->select('first_name')
            //->first_name($search)
            //->paginate($paginate)->get();
            //->select('users.first_name', 'profile.name' )
            // dd($qry);
            // $books = App\Book::with('author', 'publisher')->get();
            //$users = DB::table('users')->select('name', 'email')->get();
            //dd($user);
            //$qry = $user->profile;



    }

    public function delete($model)
    {
        return $model->delete();
    }




}