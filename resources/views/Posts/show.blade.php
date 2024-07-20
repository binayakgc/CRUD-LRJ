@extends('layouts.app')

@section('content')
    <h1> Blog post Details </h1>
    <hr>
    <a href="{{ route('posts.index') }}" class="btn btn-primary"> Back </a>
    {{-- <ul>
        <li>ID: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>    
        <li>Content: {{$post->content}}</li>
    </ul> --}}
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-between p-2 px-3">
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column ml-2"> <small class="mr-2">{{$post->id}}</small><hr> <span class="font-weight-bold">{{$post->title}}</span> </div>
                        </div>
                        <div class="d-flex flex-row mt-1 ellipsis">  <i class="fa fa-ellipsis-h"></i> </div>
                    </div>
                    <hr>
                    <div class="p-2">
                        <p class="text-justify">{{$post->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href= "{{ route('posts.edit', $post->id) }}" class="btn btn-primary">edit </a>
    <hr>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
 
