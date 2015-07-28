<?php
namespace App\Entities;

class Prueba extends Entity{

    protected $table = 'pruebas';

    protected $fillable = ['nombre', 'apellido', 'web', 'email'];

    protected $hidden = ['password', 'remember_token'];

    //Mutators

    public function setPasswordAttribute($value)
    {
        $this->attribute['password'] = bcrypt($value);
    }

    // Accessors
    public function getFullnameAttribute()
    {
        return $this->nombre . ', ' . $this->apellido;
    }
}