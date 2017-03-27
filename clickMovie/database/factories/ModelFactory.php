<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->description()->word(3),
    ];
});


$factory->define(App\Movie::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->words(1, true),
        'preco' => $faker->randomFloat(2, 0, 150),
    ];
});
