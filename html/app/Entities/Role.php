<?php
namespace App\Entities;

class Role extends Entity {

    //table
    protected $table = 'roles';

    protected $fillable = ['name'];

    protected $name;

    //relaciones

    public function profiles()
    {
       // return $this->belongsToMany(Profile::getClass());
        return $this->belongsToMany(Profile::getClass(), 'profiles_roles');
    }

}