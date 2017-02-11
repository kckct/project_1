<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $repo;

    public function __construct(PostRepo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $posts = $this->repo->list();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = 1;
        $this->repo->create($data);

        return redirect('/post');
    }
}