<?php
namespace App\Entities;

class Profile extends Entity {

    //table
    protected $table = 'profiles';

    protected $fillable = ['name'];

	// Relaciones
    public function users()
    {
        return $this->hasMany(User::getClass());
    }

    public function roles()
    {
        // return $this->belongsToMany(Roles::getClass());
        return $this->belongsToMany(Role::getClass(), 'profiles_roles');

    }

}
