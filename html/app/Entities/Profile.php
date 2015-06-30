<?php namespace App\Entities;

class Profile extends Entity {



	// Relaciones
    public function users()
    {
        return $this->hasMany(User::getClass());
    }

}
