<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // tangkap dari kolom pencarian
        // dd(request('search'));
        $judul = '';
        if(request('kategori')){
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $judul = ' in ' . $kategori->name;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $judul = ' by ' . $author->name;
        }

        return view("blog", [
            "judul" => "Blog" . $judul,
            "css" => "blog",
            // "posts" => Post::all()
            "posts" => Post::with(["author", "kategori"])->latest()->filter(request(['search', 'kategori', 'author']))->paginate(4)->withQueryString()
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
