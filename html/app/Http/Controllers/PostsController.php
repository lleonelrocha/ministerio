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


    public function create()
    {
        return view ('post.create');

    }

    public function store()
    {
        return 'datos recibidos';
    }

    public function edit()
    {
        return view('post.edit');
    }
    public function update()
    {
        return 'datos recibidos para actualizar';
    }


}
