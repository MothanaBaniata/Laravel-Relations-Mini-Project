@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Posts</h5>
                    <p class="card-text">Create, edit, and delete your blog posts here.</p>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                </div>
            </div>
        </div>
    </div>
@endsection
