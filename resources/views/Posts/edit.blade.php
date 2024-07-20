@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <h2> {{$post->id}}</h2>
            <label for="title">Title</label>
            <input type="text" name = "title" class = "form-control" value="{{ $post->title }}"> 
        </div>
        <div class = "form-group">
            <label for="content">Content</label>
           <textarea name="content" class = "form-control" >{{ $post->content }}</textarea> 
        </div>
        <button type="submit"  class="btn btn-primary">Update</button>
    </form>
