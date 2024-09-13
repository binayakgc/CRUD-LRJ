@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    <hr>
    <a href="{{ route('author.posts.index') }}" class="btn btn-primary">Back to My Posts</a>
    <hr>
    <h4>{{ $post->_id }}</h4>
    <br>
    <form action="{{ route('author.posts.update', $post->_id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required> 
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="content">Content</label>
           <textarea name="content" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $post->content) }}</textarea> 
           @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection