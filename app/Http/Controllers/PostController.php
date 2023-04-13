<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("blog", [
            "judul" => "Blog",
            "css" => "blog",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function singleShow(Post $post)
    {
        return view("post", [
            "judul" => "Single Post",
            "css" => "blog",
            "post" => $post
        ]);
    }
}
