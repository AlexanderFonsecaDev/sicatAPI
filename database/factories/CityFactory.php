<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'department_id' => factory(\App\Models\Department::class),
        'name' => $faker->name,
    ];
});
