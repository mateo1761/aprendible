<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function create(Post $post){
        return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request){

        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post creado correctamente');

        return to_route('posts.index');
    }

    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post){
        return 'edit post'; 
    }
}
