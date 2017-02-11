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
        $posts = $this->repo->index();
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

    public function show($id)
    {
        $post = $this->repo->getById($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->repo->getById($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repo->update($data);

        return redirect('/post');
    }
}