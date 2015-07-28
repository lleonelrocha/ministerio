<?php
namespace App\Entities;

class Libro extends entity{

    protected $table = 'libros';

    protected $fillable = ['id', 'editorial', 'autor', 'fecha_edicion' ];

    //relaciones

    // un libro puede ser prestado a muchos usuarios
    public function user()
    {
        return $this->belongsToMany(User::getClass(), 'libros_users');
    }

    //Un libro le perteneces solo a un autor
    public function autor()
    {
        return $this->belongsTo(Autor::getClass());
    }

}