<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(string $slug)
  {
    // stampo i post delle categorie
    $category = Category::with('posts')->where('slug', '=', $slug)->first();

    return view('guest.posts.index')->with('posts', $category->posts);
  }
}
