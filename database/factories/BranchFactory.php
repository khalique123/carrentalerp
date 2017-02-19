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
$factory->define(App\Branch::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->realText(50),
        'display_order' => $faker->unique()->numberBetween(1, 100),
        'address' => $faker->realText(50),
        'is_active' => $faker->boolean(100),
        'city_id' => function() {
            return factory(App\City::class)->create()->id;
        },
    ];
});
