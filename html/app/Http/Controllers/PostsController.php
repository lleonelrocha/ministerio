<?php
namespace App\Http\Controllers;

use App\Http\Repositories\PostRepo;
use App\Http\Controllers\Controller;




class PostsController extends Controller {

    protected $postRepo;

    public function __construct(PostRepo $postRepo )
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {

        $posts = $this->postRepo->ListPost();
        dd($posts);
        //return 'index';
        //return view('post.index');

    }

    public function create()
    {
        return 'vista create';
    }

    public function edit()
    {
        return 'vista edit';
    }


}
