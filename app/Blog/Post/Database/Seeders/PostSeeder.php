<?php

declare(strict_types=1);

namespace App\Blog\Post\Database\Seeders;

use App\Blog\Post\Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        PostFactory::times(50)->create();
    }
}
