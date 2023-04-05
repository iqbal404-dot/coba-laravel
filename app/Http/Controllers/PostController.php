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
            "posts" => Post::all()
        ]);
    }

    public function singleShow($slug)
    {
        return view("post", [
            "judul" => "Single Post",
            "css" => "blog",
            "post" => Post::find($slug)
        ]);
    }
}
