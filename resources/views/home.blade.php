@extends('layouts.admin_layout')

@section('content')
<div class="container">
    @if(Auth::user()->isAdmin())
    <div class="row mt-4 mb-4">
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="card border rounded overflow-hidden shadow-sm h-100">
                <div class="card-body p-4">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">User Statistics</strong>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Total Users</h3>
                        <span class="display-4">{{ $totalUsers }}</span>
                    </div>
                    <div class="text-body-secondary">{{ now()->format('M d, Y') }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border rounded overflow-hidden shadow-sm h-100">
                <div class="card-body p-4">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Post Statistics</strong>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Total Posts</h3>
                        <span class="display-4">{{ $totalPosts }}</span>
                    </div>
                    <div class="text-body-secondary">{{ now()->format('M d, Y') }}</div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <h1 class="mb-4">All Blog Posts</h1>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @forelse ($posts as $post)
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">{{ $post->title }}</span>
                <small>Posted on {{ $post->created_at->format('M d, Y H:i') }}</small>
            </div>
            <div class="card-body">
                <p class="card-text">{!! nl2br(e($post->content)) !!}</p>
            </div>
            <div class="card-footer text-muted">
                Author: {{ $post->user->name ?? 'Unknown' }}
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            No posts available at the moment.
        </div>
    @endforelse
</div>
@endsection