<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(){
        return view('posts.show', ['post' => new Post]);
    }

    public function create(Post $post){
        return view('posts.create', ['post' => $post]);
    }

    public function store(SavePostRequest $request){


        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post creado correctamente');
    }

    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post Actualizado correctamente');
    }
}
