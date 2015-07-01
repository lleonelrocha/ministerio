<?php
namespace App\Entities;

class Profile extends Entity {

    //table
    protected $table = 'profiles';


	// Relaciones
    public function users()
    {
        return $this->hasMany(User::getClass());
    }


    public function roles()
    {
        return $this->belongsToMany(Roles::getClass());
    }



}
