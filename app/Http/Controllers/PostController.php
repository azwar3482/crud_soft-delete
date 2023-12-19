<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // ambil data
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
// fungsi tambah
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    // public function restore($id)
    // {
    //     $post = Post::onlyTrashed()->find($id);
    //     $post->restore();
    //     return redirect()->route('posts.index');
    // }

    public function restore($id)
{
    $post = Post::withTrashed()->find($id);

    if ($post) {
        $post->restore();
        return redirect()->back()->with('success', 'Post berhasil dikembalikan!');
    } else {
        return redirect()->back()->with('error', 'Post tidak ditemukan.');
    }
}

}
