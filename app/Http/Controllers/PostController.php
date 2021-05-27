<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show(string $slug)
  {
    $post = Post::where('slug', '=', $slug)->first();

    return view('guest.posts.show' , compact('post'));
  }

  public function index()
  {
    $posts = Post::all();

    return view('guest.posts.index' , compact('posts'));
  }
}
