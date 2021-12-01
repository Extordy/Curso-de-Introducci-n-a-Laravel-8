<?php

namespace Database\Seeders;

//agregar los models a utilizar
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creacion de datos falsos en gerarquia
        User::factory(5)->create();
        Category::factory(3)->create();
        Course::factory(10)->create();
        Post::factory(90)->create();
    }
}
