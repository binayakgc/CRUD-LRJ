@extends('layouts.app')

@section('content')
    <h1> Blog post Details </h1>
    <a href="{{ url()->previous() }}"> Back </a>
    <ul>
        <li>ID: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>    
        <li>Content: {{$post->content}}</li>
    </ul>
    <a href= "">edit </a>
    <a href=""> delete</a>
@endsection
 