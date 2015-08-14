<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 25/06/2015
 * Time: 01:50 PM
 */
namespace App\Entities;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Post extends Entity implements AuthenticatableContract {

    use Authenticatable;

    protected $table = 'posts';


    protected $fillable = ['user_id', 'descripcion', 'image', 'titulo'];

    //Relaciones

    public function user()
    {
        return $this->belongsTo(User::getClass());
    }

    public function comentario()
    {
        //uno a muchos
        // un post tiene muchos comentarios
        return $this->hasMany(Post::getClass());
    }

    //Scoops
    public function scopeDescripcion($query, $search)
    {
        if(trim($search) != '')
            $query->orWhere('descripcion', 'like', "%$search%");

    }

    //Accesors

    public function getFulldateAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }


}