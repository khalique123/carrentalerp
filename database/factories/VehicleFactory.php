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
$factory->define(App\Vehicle::class, function (Faker\Generator $faker) {
    return [
        'reg_number' => $faker->unique()->text(12),
        'chassis_number' => $faker->unique()->name(50),
        'engine_number' => $faker->unique()->text(50),
        'make' => $faker->text(20),
        'model' => $faker->text(50),
        'manu_year' => $faker->year(),
        'color' => $faker->colorName(15),
        'vehicle_class_id' => function() {
            return factory(App\VehicleClass::class)->create()->id;
        },
        'weight' => $faker->numberBetween(2000, 20000),
        'transmission_id' => function() {
            return factory(App\Transmission::class)->create()->id;
        },
        'description' => $faker->realText(),
        'fuel_id' => function() {
            return factory(App\Fuel::class)->create()->id;
        },
        'availability_id' => function() {
            return factory(App\Availability::class)->create()->id;
        },
        'vehicle_location' => $faker->text(150),
        'branch_id' => function() {
            return factory(App\Branch::class)->create()->id;
        },
        'vehicle_status_id' => function() {
            return factory(App\VehicleStatus::class)->create()->id;
        },
    ];
});
