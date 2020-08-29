<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\patient;
use Faker\Generator as Faker;

$factory->define(patient::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'pseudoname'=> $faker->firstname(),
        'email'=> $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'bornplace' => $faker->city ,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now') ,
        'gender'=>$faker->randomElement($array = array ('male','female')),
        'phonenumber'=> $faker->phoneNumber , 
        'adress'=> $faker->city
    ];
});
