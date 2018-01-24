<?php

use Faker\Generator as Faker;

use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30, 2),
        'author' => $faker->name,
        'edition' => $faker->numberBetween(1,6)
    ];
});
