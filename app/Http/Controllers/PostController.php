<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //
    public function index() {
      $posts = Post::all()->sortByDesc('created_at');
      return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
      return view('posts.new');
    }

    public function store(Request $request) {
      Post::create($request->all());
      return redirect()->action('PostController@index');
    }

    public function destory(Request $request) {
      Post::destroy($request->id);
      return redirect()->action('PostController@index');
    }
}
