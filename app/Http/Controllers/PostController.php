<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() 
    {
        $posts = Post::all();
                                                                             
        return view('posts.index', compact('posts'));
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function show(Post $post) 
    {
        
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request -> validate ([
            'title' => 'required',
            'content' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function edit() {

    }

    public function destory()
    {

    }

}