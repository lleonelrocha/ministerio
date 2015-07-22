<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 25/06/2015
 * Time: 01:50 PM
 */

namespace App\Http\Repositories;
use App\Entities\Post;
use App\Entities\Auth;
use DB;



class PostRepo extends BaseRepo {

    public function getModel()
    {
        return new Post;
    }

    public function ListPost($user_id)
    {
        $qry = Post::with('user')->where('posts.user_id', '=', $user_id)

            ->paginate(10);
        return $qry;
    }



}