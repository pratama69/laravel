<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tabungan;
use Faker\Generator as Faker;

$factory->define(Tabungan::class, function (Faker $faker) {
    return [
        'nis' => $faker->unique()->numberBetween(1,100),
        'nama' => $faker->name,
        'kelas' => $faker->numberBetween(1,5),
        'jml' => $faker->numberBetween(1000, 100000),
        
    ];
});
