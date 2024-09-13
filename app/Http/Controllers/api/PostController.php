<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return response()->json($posts);
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }
}
