<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts()->latest()->get();
        return view('author.posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('author.posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = auth()->user()->posts()->create($validatedData);

        return redirect()->route('author.posts.index')->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);
        return view('author.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('author.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('author.posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        
        $post->delete();
        return redirect()->route('author.posts.index')->with('success', 'Post deleted successfully');
    }
}