@extends('layouts.admin_layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Details</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-secondary">
            <span data-feather="edit"></span>
            Edit User
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
        <p class="card-text">
            <strong>Role:</strong> {{ ucfirst($user->role) }}<br>
            <strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}<br>
            <strong>Last Updated:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}
        </p>
    </div>
</div>

<h3 class="mt-4">User's Posts</h3>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($user->posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-outline-info">View</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No posts found for this user.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">Back to Users List</a>
@endsection