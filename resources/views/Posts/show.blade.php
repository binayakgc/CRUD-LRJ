@extends('layouts.app')

@section('content')
    <h1> Blog post Details </h1>
    <a href="{{ url()->previous() }}"> Back </a>
    <ul>
        <li>ID: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>    
        <li>Content: {{$post->content}}</li>
    </ul>
    <a href= "{{ route('posts.edit', $post->id) }}">edit </a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
 