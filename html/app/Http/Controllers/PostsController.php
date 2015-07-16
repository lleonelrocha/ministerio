<?php
namespace App\Http\Controllers;

use App\Http\Repositories\PostRepo;
use Auth;


class PostsController extends Controller {

    protected $postRepo;

    public function __construct(PostRepo $postRepo )
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        $user_id=(Auth::user()->iduser);
        $posts = $this->postRepo->ListPost($user_id);

        return view('post.index', compact('posts'));

    }

    /* public function post($user_id)
    {
        return 'post del usuario: '.$user_id;
    }
    */


    public function create()
    {
        return 'vista create';
    }

    public function edit()
    {
        return 'vista edit';
    }


}
