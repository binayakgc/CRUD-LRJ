@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Manage Your Blog Posts</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('author.posts.create') }}" class="btn btn-primary">Create New Post</a>
                </div>
            </div>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('author.posts.show', $post->_id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('author.posts.edit', $post->_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('author.posts.destroy', $post->_id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">You haven't created any posts yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection