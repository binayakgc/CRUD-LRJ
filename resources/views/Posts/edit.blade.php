@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <hr>
    <a href="{{ url()->previous() }}" class="btn btn-primary"> Back </a>
    <hr>
    <h4> {{$post->id}}</h4>
    <br>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="title">Title</label>
            <input type="text" name = "title" class = "form-control" value="{{ $post->title }}" required> 
        </div>
        <br>
        <div class = "form-group">
            <label for="content">Content</label>
           <textarea name="content" class = "form-control" required >{{ $post->content }}</textarea> 
        </div>
        <br>
        <button type="submit"  class="btn btn-primary">Update</button>
    </form>
