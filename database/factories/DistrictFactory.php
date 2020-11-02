<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'city_id' => factory(\App\Models\City::class),
        'zone_id' => factory(\App\Models\Zone::class),
        'name' => $faker->name,
    ];
});
