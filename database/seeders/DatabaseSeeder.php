<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(5)->create()->each(function ($user) {
            $user->blogs()->saveMany(
                \App\Models\Blog::factory(3)->make()
            )->each(function ($blog) {
                $blog->comments()->saveMany(
                    \App\Models\Comment::factory(5)->make()
                );
            });
        });
    }
}
