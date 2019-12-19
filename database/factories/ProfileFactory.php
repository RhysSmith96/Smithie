<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [

        'name' => $faker-> name(),
        'age' => $faker->numberBetween(16,50),
        'hobbies' => $faker-> randomElement(["Rugby","Football","Musician","Cricket",
        	"Hockey","Gaming", "Partying"]),
        'address'=> $faker->address(),
        
            ];
});
