<?php
namespace App\Http\Repositories;
use App\Entities\Profile;


class ProfileRepo extends BaseRepo {


    public function getModel()
    {
        return new Profile;
    }

    public function ListProfile()
    {
         //$qry = Profile::with('profile', 'profiles_roles', 'role');
        $qry = Profile::all();
        //dd($qry);

        /*$qry= User::with('profile')
            ->first_name($search)
            ->paginate($paginate);
        */
        return $qry;
      }

    public function delete($model)
    {
        return $model->delete();
    }

}