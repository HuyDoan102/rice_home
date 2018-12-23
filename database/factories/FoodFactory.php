<?php

use Faker\Generator as Faker;
use App\Models\Food;

$factory->define(Food::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl($width = 640, $height = 480, 'food'),
        'description' => $faker->text,
        'price' => $faker->numberBetween(15000, 20000)
    ];
});
