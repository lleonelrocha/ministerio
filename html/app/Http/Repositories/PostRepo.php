<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 25/06/2015
 * Time: 01:50 PM
 */

namespace App\Http\Repositories;
use App\Entities\Post;


class PostRepo extends BaseRepo {

    public function getModel()
    {
        return new Post;
    }


}