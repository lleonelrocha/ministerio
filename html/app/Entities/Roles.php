<?php
namespace App\Entities;

class Roles extends Entity {


    protected $table = 'roles';

    //relaciones
    public function profiles()
    {
        return $this->belongsToMany(Profile::getClass());
    }

}