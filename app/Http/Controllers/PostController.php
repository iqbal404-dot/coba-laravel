<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // tangkap dari kolom pencarian
        // dd(request('search'));

        return view("blog", [
            "judul" => "Blog",
            "css" => "blog",
            // "posts" => Post::all()
            "posts" => Post::with(["author", "kategori"])->latest()->filter(request(['search']))->paginate(7)->withQueryString()
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
