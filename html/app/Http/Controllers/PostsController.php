<?php
namespace App\Http\Controllers;


use App\Http\Repositories\PostRepo;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostEditRequest;

use Illuminate\Http\Request;
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

    public function store(PostCreateRequest $request)
    {

        dd($request->all());
        return 'datos recibidos';
    }

    public function edit($id)
    {
        $post = $this->postRepo->find($id);
        //dd($post);
        return view('post.edit', compact('post'));
    }
    public function update(PostEditRequest $request)
    {
        dd($request->all());
        return 'datos recibidos para actualizar';
    }


}
