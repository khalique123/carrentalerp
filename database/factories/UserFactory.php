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
        'first_name' => $faker->unique()->realText(),
        'last_name' => $faker->unique()->realText(),
        'email' => $faker->unique()->realText(),
        'password' => $faker->text(),
        'address' => $faker->year(),
        'phone_number' => $faker->colorName(),
        'pin' => $faker->numberBetween(2000, 20000),
    ];
});
