<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', true)
                     ->orderBy('published_at', 'desc')
                     ->paginate(10); // pagination
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('published_at', true)
                    ->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
