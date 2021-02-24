<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->paginate(5);

        return view('blog');
    }

    public function show(Post $post)
    {
        return view('pages.dashboard.artikels.show', compact('post'));
    }
}
