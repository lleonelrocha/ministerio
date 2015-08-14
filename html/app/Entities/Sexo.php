<?php
namespace App\Entities;

class Sexo extends Entity{

   protected $table = 'sexos';

   protected $fillable = ['id', 'nombre'];

    //Relaciones

    // un sexo es para varios user
   /* public function phone()
    {
        return $this->hasOne('App\Phone');
    }
    */

    public function user()
    {
        return $this->hasOne(Sexo::getClass());
    }

}