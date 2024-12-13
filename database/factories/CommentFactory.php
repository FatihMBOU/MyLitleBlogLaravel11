<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'blog_id' => Blog::factory(), // Maak een referentie naar een blog
        'user_id' => 1, // Standaard user_id, je kan dit met auth()->id() vervangen
        'content' => $faker->sentence,
    ];
});
