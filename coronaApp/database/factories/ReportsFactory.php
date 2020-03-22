<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(\App\Reporting::class, function (Faker $faker) {
    return [
        'longitude' => $faker->randomFloat(10,0,1490),
        'latitude' => $faker->randomFloat(10,0,1490),
        'type' => $faker->name,
        'urlToImage' => $faker->address,
        'time' =>$faker->time(),
        'description' =>$faker->text(),
    ];
});
