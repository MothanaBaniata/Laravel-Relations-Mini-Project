@extends('layouts.master')

@section('title', $post->title)

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    @if($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="{{ $post->title }}">
    @endif
    <p>{{ $post->content }}</p>
    <p>
        @foreach($post->tags as $tag)
            <span class="badge bg-secondary">{{ $tag->name }}</span>
        @endforeach
    </p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
</div>
@endsection
