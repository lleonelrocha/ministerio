<?php
namespace App\Http\Repositories;
use App\Entities\Profile;
use App\Entities\Roles;

class ProfileRepo extends BaseRepo {


    public function getModel()
    {
        return new Profile;
    }



    public function ListProfile()
    {

        $qry = Profile::all();
        return $qry;
      }



}