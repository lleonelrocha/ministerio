<?php
namespace App\Entities;

class Comentario extends Entity{

    protected $table = 'comentarios';

    protected $fillable = ['nombre' ,'apellido', 'texto', 'post_id'];


    public function post()
    {
          //Un comentario pertenece solo a un post
        return $this->belongsTo(Post::getClass());
            // relacion uno a uno
            //return $this->hasOne('tabla');
    }

}
