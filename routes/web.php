<?php

use App\Http\Controllers\PostController;
use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("home", [
        "judul" => "Home",
        "css" => "style",
        "posts" => Post::with(["author", "kategori"])->latest()->get()
    ]);
});

Route::get('/about', function () {
    return view("about", [
        "judul" => "Tentang",
        "css" => "about",
        "name" => "Fieryald Charifi Annazmi",
        "email" => "Fieryaldchf404@gmail.com",
        "image" => "fieryald.jpg"
    ]);
});

Route::get('/produk', function () {
    return view("produk", [
        "judul" => "Produk",
        "css" => "produk"
    ]);
});

Route::get('/fasilitas', function () {
    return view("fasilitas", [
        "judul" => "Fasilitas",
        "css" => "fasilitas"
    ]);
});

// BLOG
Route::get('/blog', [PostController::class, "index"]);
// single blog
Route::get('blog/{post:slug}', [PostController::class, "singleShow"]);

Route::get('/kategori', function () {
    return view("kategories", [
        "judul" => "Post Kategori",
        "css" => "kategori",
        "kategories" => Kategori::all()
    ]);
});

Route::get('/kategori/{kategori:slug}', function (Kategori $kategori) {
    return view("kategori", [
        "judul" => $kategori->name,
        "css" => "kategori",
        "posts" => $kategori->post->load("author"),
        "kategori" => $kategori->name
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view("author", [
        "judul" => "User Posts",
        "name" => $author->name,
        "css" => "author",
        "posts" => $author->post->load("kategori")
    ]);
});

