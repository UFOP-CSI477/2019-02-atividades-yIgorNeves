<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professor;
use Faker\Generator as Faker;



$factory->define(Professor::class, function (Faker $faker) {
    $area = ['SJM','CJM','PJM','EJM']; 
    static $order1 = 0;
    return [
        'name' => $faker->name,
        'area' => $area[$order1], 
    ];
});
