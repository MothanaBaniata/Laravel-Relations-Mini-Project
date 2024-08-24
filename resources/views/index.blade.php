@extends('layouts.master')

@section('title', 'Landing Page')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to BlogApp!</h1>
        <p class="lead">Explore our latest posts and stay updated with the latest content.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">View Posts</a>
    </div>
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
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
