<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Userinfo;
use Faker\Generator as Faker;

$factory->define(Userinfo::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname'=> $faker->lastName,
        'phone'=> $faker->phoneNumber,
        'message' => $faker->paragraph(5),
        'user_id'=> \App\User::all()->random()->id,
    ];
});
