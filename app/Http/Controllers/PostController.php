<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index () {
        $posts = Post::get();
        
        return view('posts.index', ['posts' => $posts]);
    }

    public function show (Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // return request();
        // return $request->input('body');

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect()->route('posts.index');
    }
}
