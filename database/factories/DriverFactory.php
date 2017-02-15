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
$factory->define(App\Driver::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->ulastName(),
        'address' => $faker->address(),
        'fathers_name' => $faker->name(),
        'date_of_birth' => $faker->dateTime(),
        'valid_upto' => $faker->dateTime(),
        'badge_number' => $faker->randomNumber(),
        'ref_number' => $faker->randomNumber(),
        'date_of_issue' => $faker->dateTime(),
    ];
});
