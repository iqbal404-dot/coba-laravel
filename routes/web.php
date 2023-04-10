<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
        "css" => "style"
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
