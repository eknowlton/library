<?php

use Faker\Generator as Faker;

use App\Book;
use App\BookEdition;

$factory->define(BookEdition::class, function (Faker $faker) {
    return [
        'book_id' => factory(Book::class)->create()->id,
        'title' => $faker->realText(100, 3),
        'author' => $faker->name,
        'edition' => $faker->numberBetween(4, 10) . 'th'
    ];
});
