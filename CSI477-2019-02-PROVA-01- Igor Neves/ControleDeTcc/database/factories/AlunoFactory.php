<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aluno;
use Faker\Generator as Faker;

$factory->define(Aluno::class, function (Faker $faker) {
    $curso = ['SIS','COM','PRO','ELE']; 
    static $order1 = 0;
      
    return [
        'name' => $faker->name,
        'curso' => $faker->randomElement($curso),
    ];
    
});
