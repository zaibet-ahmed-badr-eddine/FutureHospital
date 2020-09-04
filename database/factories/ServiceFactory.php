<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name_s'=> $faker->word,
        'chef_id'=> $faker->randomElement($array = array ('1', '2', '3', '4')),
        'lit_number'=> $faker->randomDigit
    ];
});
