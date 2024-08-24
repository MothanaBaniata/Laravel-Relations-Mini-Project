<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Show the form for creating a new post
    public function create()
    {
        $tags = Tag::all(); // Get all tags to display in the form
        return view('posts.create', compact('tags'));
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the post
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
        ]);

        // Attach tags to the post
        if ($request->has('tags')) {
            $post->tags()->sync($request->input('tags'));
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    // Display a listing of the posts
    public function index()
    {
        $posts = Post::with('tags')->get();
        return view('posts.index', compact('posts'));
    }
}

