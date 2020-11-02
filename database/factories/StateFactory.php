<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'module_id' => factory(\App\Models\Module::class),
        'name' => $faker->name,
    ];
});
