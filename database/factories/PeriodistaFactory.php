<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Periodista;
use Faker\Generator as Faker;

$factory->define(Periodista::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'telefono' => $faker->phoneNumber,
        'especialidad' => $faker->sentence,
    ];
});
