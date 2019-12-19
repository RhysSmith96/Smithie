<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post' => $faker -> realText($maxNbChars = 100, $indexSize = 2),
        'profile_id'=>App\Profile::inRandomOrder()->first()->id,
    ];
});
