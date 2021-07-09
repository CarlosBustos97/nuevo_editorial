<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Revista;
use Faker\Generator as Faker;

$factory->define(Revista::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->sentence,
        'tipo_id' => rand(1,5),
        'fecha' => $faker->date,
        'num_paginas' => rand(5,20),
        'num_ejemplares' => rand(5,20),
    ];
});
