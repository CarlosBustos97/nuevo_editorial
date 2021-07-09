<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Periodista_Articulo;
use Faker\Generator as Faker;

$factory->define(Periodista_Articulo::class, function (Faker $faker) {
    return [
        'periodista_id' => rand(1,5),
        'articulo_id' => rand(1,5),
    ];
});
