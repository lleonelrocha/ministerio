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
        $qry = Profile::with('profile', 'profiles_roles', 'role');
        dd($qry);
        //return $qry;

      }

}