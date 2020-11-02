<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CodeValidation;
use Faker\Generator as Faker;

$factory->define(CodeValidation::class, function (Faker $faker) {
    return [
        'code' => $faker->word,
        'start_at' => $faker->dateTime(),
        'end_at' => $faker->dateTime(),
    ];
});
