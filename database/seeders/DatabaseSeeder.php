<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "Muhammad Iqbal",
            "email" => "iqbal.xtab404@gmail.com",
            "password" => bcrypt("123"),
            "status" => "admin"
        ]);
        User::create([
            "name" => "Fieryald Charifi",
            "email" => "fieryaldchf@gmail.com",
            "password" => bcrypt("321"),
            "status" => "superadmin"
        ]);

        Kategori::create([
            "name" => "Jaket",
            "slug" => "jaket"
        ]);
        Kategori::create([
            "name" => "Sepatu",
            "slug" => "sepatu"
        ]);
        Kategori::create([
            "name" => "Aksesoris",
            "slug" => "aksesoris"
        ]);

        Post::create([
            "kategori_id" => 1,
            "user_id" => 2,
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Nisi incidunt suscipit voluptates, vitae pariatur iste
            voluptatum magni",
            "body" => "<p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi incidunt
            suscipit voluptates, vitae pariatur iste voluptatum magni, illum vel labore
            distinctio perferendis debitis laborum hic? Animi repudiandae fugit et
            dolorem!</p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laudantium
            adipisci tenetur ullam voluptatum ipsam aspernatur enim voluptate molestias
            in?
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nobis
            repellat deleniti! Pariatur voluptates eaque cupiditate dolorum similique.
            Quod perspiciatis, perferendis modi id nisi neque! Explicabo, accusantium
            quos laborum expedita illo sapiente. Provident molestias officiis modi quis
            vitae dolore quae!
            </p>"
        ]);
        Post::create([
            "kategori_id" => 2,
            "user_id" => 1,
            "judul" => "Judul Post Ke Dua",
            "slug" => "judul-post-ke-dua",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Nisi incidunt suscipit voluptates, vitae pariatur iste
            voluptatum magni",
            "body" => "<p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi incidunt
            suscipit voluptates, vitae pariatur iste voluptatum magni, illum vel labore
            distinctio perferendis debitis laborum hic? Animi repudiandae fugit et
            dolorem!</p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laudantium
            adipisci tenetur ullam voluptatum ipsam aspernatur enim voluptate molestias
            in?
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nobis
            repellat deleniti! Pariatur voluptates eaque cupiditate dolorum similique.
            Quod perspiciatis, perferendis modi id nisi neque! Explicabo, accusantium
            quos laborum expedita illo sapiente. Provident molestias officiis modi quis
            vitae dolore quae!
            </p>"
        ]);
        Post::create([
            "kategori_id" => 3,
            "user_id" => 2,
            "judul" => "Judul Post Ke Tiga",
            "slug" => "judul-post-ke-tiga",
            "excerpt" => "Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Nisi incidunt suscipit voluptates, vitae pariatur iste
            voluptatum magni",
            "body" => "<p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi incidunt
            suscipit voluptates, vitae pariatur iste voluptatum magni, illum vel labore
            distinctio perferendis debitis laborum hic? Animi repudiandae fugit et
            dolorem!</p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laudantium
            adipisci tenetur ullam voluptatum ipsam aspernatur enim voluptate molestias
            in?
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nobis
            repellat deleniti! Pariatur voluptates eaque cupiditate dolorum similique.
            Quod perspiciatis, perferendis modi id nisi neque! Explicabo, accusantium
            quos laborum expedita illo sapiente. Provident molestias officiis modi quis
            vitae dolore quae!
            </p>"
        ]);
    }
}
