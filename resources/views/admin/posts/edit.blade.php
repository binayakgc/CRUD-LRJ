@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    <hr>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
    <hr>
    <h4>{{ $post->_id }}</h4>
    <br>
    <form action="{{ route('admin.posts.update', $post->_id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required> 
        </div>
        <br>
        <div class="form-group">
            <label for="content">Content</label>
           <textarea name="content" class="form-control" required>{{ $post->content }}</textarea> 
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection