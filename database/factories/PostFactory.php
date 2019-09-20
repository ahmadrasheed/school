<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>substr($faker->sentence(4), 0, -1),
        'body'=>$faker->paragraph,
        'image'=>'autumn.jpg'
    ];
});
