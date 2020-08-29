<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name_s'=> $faker->word,
        'name_cs'=> $faker->word,
        'lit_number'=> $faker->randomDigit
    ];
});
