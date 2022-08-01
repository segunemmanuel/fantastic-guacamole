<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        \App\Models\User::factory(User::class)->count(100)->create()->each(function ($user) {
            $user->posts()->saveMany(\App\Models\Post::factory(Post::class)->count(mt_rand(2,10))->make());
        });

    }

}
