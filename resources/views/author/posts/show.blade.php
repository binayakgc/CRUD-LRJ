@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Blog Post Details</h1>
    <hr>
    <a href="{{ route('author.posts.index') }}" class="btn btn-primary">Back to My Posts</a>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>ID: {{ $post->_id }}</span>
                        <span>Created: {{ $post->created_at->format('Y-m-d H:i') }}</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('author.posts.edit', $post->_id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('author.posts.destroy', $post->_id) }}" method="post" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
    </div>
</div>
@endsection