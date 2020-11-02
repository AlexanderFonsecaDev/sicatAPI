<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'region_id' => factory(\App\Models\Region::class),
        'name' => $faker->name,
    ];
});
