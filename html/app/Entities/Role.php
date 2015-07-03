<?php
namespace App\Entities;

class Role extends Entity {


    protected $table = 'roles';


    protected $fillable = ['name'];


    //relaciones
    public function profiles()
    {
       // return $this->belongsToMany(Profile::getClass());
        return $this->belongsToMany('Profile', 'profiles_roles', 'profile_id', 'role_id');


    }

}