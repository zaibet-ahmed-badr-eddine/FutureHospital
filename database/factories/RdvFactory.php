<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rdv;
use Faker\Generator as Faker;

$factory->define(Rdv::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'pseudoname'=>$faker->firstname(),
        'gender'=>$faker->randomElement($array = array ('male','female')),
        'email'=> $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'bornplace' => $faker->city ,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now') ,
        'adress'=> $faker->city,
        'phonenumber'=> $faker->phoneNumber , 
        'rdv_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
