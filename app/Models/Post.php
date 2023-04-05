<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts) ;
    }

    public static function find($slug)//judul post pertama
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere("slug", $slug);
    }
}
