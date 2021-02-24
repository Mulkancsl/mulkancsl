<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     $post = Post::latest()->paginate(5);

    //     return view('pages.dashboard.artikels.artikels', compact('pages.dashboard.artikels'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('pages.dashboard.artikels.artikels', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function addArtikels()
    {
        return view('pages.dashboard.artikels.add-artikels');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('artikels')
            ->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
        return view('pages.dashboard.artikels.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('pages.dashboard.artikels.edit-artikels', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('artikels')
            ->with('seccess', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('artikels')
            ->with('success', 'Post deleted successfully');
    }
}
