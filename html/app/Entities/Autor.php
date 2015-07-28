<?php
namespace App\Entities;

class Autor extends Entity{

    protected $table = 'autores';
    protected $fillable = ['id', 'nombre', 'apellido', 'pais', 'fecha_nacimiento'];

    //un autor tiene muchos libros
    public function libro()
    {
        return $this->hasMany(Libro::getClass());
    }

}