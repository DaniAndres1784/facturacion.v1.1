<?php

use App\Suscriptor;
use Faker\Generator as Faker;

$factory->define(\App\Suscriptor::class, function (Faker $faker) {
    return [
        	'nombres'=>$faker->name,
        	'apellidos'=>$faker->lastName,
        	'cedula'=>$faker->text($maxNbChars = 30)
    ];
});
