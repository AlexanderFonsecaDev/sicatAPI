<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Inscription;
use Faker\Generator as Faker;

$factory->define(Inscription::class, function (Faker $faker) {
    return [
        'state_id' => factory(\App\Models\State::class),
        'typedocument_id' => factory(\App\Models\Typedocument::class),
        'district_id' => factory(\App\Models\District::class),
        'gender_id' => factory(\App\Models\Gender::class),
        'codevalidation_id' => factory(\App\Models\Codevalidation::class),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'document' => $faker->word,
        'birthday' => $faker->date(),
        'address' => $faker->word,
    ];
});
