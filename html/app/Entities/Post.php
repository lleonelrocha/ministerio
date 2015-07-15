<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 25/06/2015
 * Time: 01:50 PM
 */
namespace App\Entities;

class Post extends Entity {


    protected $table = 'posts';


    protected $fillable = ['user_id', 'descripcion', 'image'];

    //Relaciones

    public function user()
    {
        return $this->belongsTo(User::getClass());
    }

}