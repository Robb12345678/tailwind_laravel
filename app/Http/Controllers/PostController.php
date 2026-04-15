<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts')); 
    }

    public function store(Request $request)
    {
        Post::create([
        'title' => $request->title,
        'content' => $request->content,
        ]);
        return back();
    }    

    public function destroy($id)
{
    $post = \App\Models\Post::findOrFail($id);
    $post->delete();

    return back(); // IMPORTANT (same fix as before)
}
}
