@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Create New Blog Post</h1>
    <hr>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
    <br>
    <br>
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection