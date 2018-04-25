<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'author' => $faker->word,
        'file' => $faker->numberBetween(1000,9999).'.fb2',
    ];
});
