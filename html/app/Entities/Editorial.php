<?php
namespace App\Entities;

class Editorial extends entity{

    protected $table = 'editoriales';

    protected $fillable = ['id', 'nombre'];

    //Una editorial puede tener varios libros
    public function libro()
    {
        return $this->hasMany(Libro::getClass());
    }


}
