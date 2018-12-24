<?php

use Faker\Generator as Faker;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role_id' => 2,
        'email_verified_at' => now(),
        'password' => bcrypt('123123123'), // secret
        'phone' => $faker->phoneNumber,
        'avatar' => $faker->imageUrl($width = 640, $height = 480, 'people'),
        'status' => $faker->numberBetween(1, 2),
        'remember_token' => str_random(10),
    ];
});
