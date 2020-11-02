<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TypeDocument;
use Faker\Generator as Faker;

$factory->define(TypeDocument::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
