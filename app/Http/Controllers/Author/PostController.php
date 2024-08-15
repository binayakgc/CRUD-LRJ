<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        $post = Auth::user()->posts()->create($validatedData);

        return redirect()->route('author.posts.index')->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }
        return view('author.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }
        return view('author.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);

        return redirect()->route('author.posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();
        return redirect()->route('author.posts.index')->with('success', 'Post deleted successfully');
    }
}