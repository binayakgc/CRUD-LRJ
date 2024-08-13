@extends('layouts.admin_layout')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Post</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href = "{{route('posts.create')}}" class="btn btn-primary"> Create Post</a>
            </div>
        </div>
    </div>
    <div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href =" {{ route('posts.show', $post->id) }} ">{{$post->title}}
                    <hr>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
 