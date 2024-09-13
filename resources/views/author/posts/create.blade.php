@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Create New Blog Post</h1>
    <hr>
    <a href="{{ route('author.posts.index') }}" class="btn btn-primary">Back to My Posts</a>
    <br>
    <br>
    <form action="{{ route('author.posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" required value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection