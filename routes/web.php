<?php

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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "author" => "Fieryald Charifi",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eum pariatur facilis, error consequuntur eius necessitatibus facere. Cupiditate quaerat possimus libero eligendi facere, voluptate laborum quos non, quae error modi nisi ratione. Totam at dolores voluptatibus optio placeat numquam obcaecati, ullam soluta nesciunt quia sequi ea, laboriosam minima mollitia, nihil maiores ab sint eum consequatur cumque est aperiam. Veniam tempore error ipsum vitae aperiam ipsa consectetur rerum, nostrum doloremque qui animi enim excepturi voluptatem amet odio ullam expedita modi ex? Beatae, sunt minima, natus quos iusto eveniet quia adipisci non eligendi corporis facere maiores consectetur cupiditate. Rerum quam magni rem."
        ],
        [
            "judul" => "Judul Post Kedua",
            "author" => "Muhammad Iqbal",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eum pariatur facilis, error consequuntur eius necessitatibus facere. Cupiditate quaerat possimus libero eligendi facere, voluptate laborum quos non, quae error modi nisi ratione. Totam at dolores voluptatibus optio placeat numquam obcaecati, ullam soluta nesciunt quia sequi ea."
        ]    
    ];

    return view("blog", [
        "judul" => "Blog",
        "css" => "blog",
        "posts" => $blog_posts
    ]);
});

// single blog
Route::get('blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "author" => "Fieryald Charifi",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eum pariatur facilis, error consequuntur eius necessitatibus facere. Cupiditate quaerat possimus libero eligendi facere, voluptate laborum quos non, quae error modi nisi ratione. Totam at dolores voluptatibus optio placeat numquam obcaecati, ullam soluta nesciunt quia sequi ea, laboriosam minima mollitia, nihil maiores ab sint eum consequatur cumque est aperiam. Veniam tempore error ipsum vitae aperiam ipsa consectetur rerum, nostrum doloremque qui animi enim excepturi voluptatem amet odio ullam expedita modi ex? Beatae, sunt minima, natus quos iusto eveniet quia adipisci non eligendi corporis facere maiores consectetur cupiditate. Rerum quam magni rem."
        ],
        [
            "judul" => "Judul Post Kedua",
            "author" => "Muhammad Iqbal",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam eum pariatur facilis, error consequuntur eius necessitatibus facere. Cupiditate quaerat possimus libero eligendi facere, voluptate laborum quos non, quae error modi nisi ratione. Totam at dolores voluptatibus optio placeat numquam obcaecati, ullam soluta nesciunt quia sequi ea."
        ]    
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view("post", [
        "judul" => "Single Post",
        "css" => "blog",
        "post" => $new_post
    ]);
});
