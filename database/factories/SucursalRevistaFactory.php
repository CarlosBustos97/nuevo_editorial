<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sucursal_Revista;
use Faker\Generator as Faker;

$factory->define(Sucursal_Revista::class, function (Faker $faker) {
    return [
        'sucursal_id' => rand(1,5),
        'revista_id' => rand(1,5),
    ];
});
