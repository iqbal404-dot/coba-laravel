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

        // User::create([
        //     "name" => "Fieryald Charifi",
        //     "email" => "fieryaldchf@gmail.com",
        //     "password" => bcrypt("321"),
        //     "status" => "superadmin"
        // ]);

        User::factory(5)->create();

        Kategori::create([
            "name" => "Jacket",
            "slug" => "jacket"
        ]);
        Kategori::create([
            "name" => "Shoes",
            "slug" => "shoes"
        ]);
        Kategori::create([
            "name" => "Fashion",
            "slug" => "fashion"
        ]);

        Post::factory(1)->create();
    }
}
