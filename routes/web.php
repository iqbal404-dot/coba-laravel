<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// Route::get('/kategori/{kategori:slug}', function (Kategori $kategori) {
//     return view("blog", [
//         "judul" => "Post by Kategori: $kategori->name",
//         "css" => "kategori",
//         "posts" => $kategori->post()->load("author", "kategori")
//     ]);
// });

// Route::get('/author/{author:username}', function (User $author) {
//     return view("blog", [
//         "judul" => "Post by Author: $author->name",
//         "css" => "author",
//         "posts" => $author->post()->load("author", "kategori")
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


