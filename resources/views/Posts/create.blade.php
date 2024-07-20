@extends('layouts.app')

@section('content')
    <h1> Blog post Create </h1>
    <hr>
    <a href="{{ url()->previous() }}" class="btn btn-primary"> Back </a>
    <br>
    <form action = "{{route('posts.store')}}" method = "post">
        @csrf
        <div class = "form-group">
            <label for="title"> Title</label>
            <input type="text" name = "title" class = "form-control" required>
        </div>
        <br>
        <div class = "form-group">
            <label for="content"> Content </label>
            <textarea name = "content" class = "form-control" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
 