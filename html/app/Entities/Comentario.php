<?php
namespace App\Entities;

class Comentario extends Entity{

    protected $table = 'comentarios';

    protected $fillable = ['nombre' ,'apellido', 'texto', 'post_id'];


    public function post()
    {

        return $this->belongsTo(Post::getClass());
    }

}
