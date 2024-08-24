@extends('layouts.master')

@section('title', 'Posts')

@section('content')
<div class="container">
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <p class="card-text">
                        <small class="text-muted">
                            @foreach($post->tags as $tag)
                                <span class="badge bg-secondary">{{ $tag->name }}</span>
                            @endforeach
                        </small>
                    </p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
