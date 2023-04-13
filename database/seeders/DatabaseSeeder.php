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
        User::factory(5)->create();

        // User::create([
        //     "name" => "Fieryald Charifi",
        //     "email" => "fieryaldchf@gmail.com",
        //     "password" => bcrypt("321"),
        //     "status" => "superadmin"
        // ]);

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

        Post::factory(20)->create();
    }
}
