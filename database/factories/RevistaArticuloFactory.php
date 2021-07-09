<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Revista_Articulo;
use Faker\Generator as Faker;

$factory->define(Revista_Articulo::class, function (Faker $faker) {
    return [
        'revista_id' => rand(1,5),
        'articulo_id' => rand(1,5),
    ];
});
