<?php

namespace App\Http\Repositories;
use App\Entities\Comentario;
use App\Entities\Auth;
use DB;



class ComentarioRepo extends BaseRepo{

    public function getModel()
    {
        return new Comentario;
    }


    public function ListComentario($post_id)
    {
        //$posts = Category::find(1)->posts()->orderBy('created_at', 'desc')->where('hidden', '=', 0)->where('id', '=', $id)->get();
        //$comments = Comment::where('post_id', '=', $id)->paginate(10);
        $qry = Comentario::where('post_id', '=' , $post_id)
            ->orderBy('id' ,'desc')
            ->get();
        return $qry;

    }


}