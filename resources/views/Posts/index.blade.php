@extends('layouts.app')

@section('content')
    <div>
        <h1 class="blog-post"> Blog post </h1>
        <hr>
        <a href = "{{route('posts.create')}}" class="btn btn-primary"> Create Post</a>
        <hr>
    </div>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href =" {{ route('posts.show', $post->id) }} ">{{$post->title}}
                <hr>
            </li>
        @endforeach
    </ul>
@endsection
 