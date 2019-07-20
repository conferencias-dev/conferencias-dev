<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Conference;
use Faker\Generator as Faker;

$factory->define(Conference::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text,
        'url'         => $faker->url,
        'from'        => $faker->date,
        'to'          => $faker->date,
    ];
});
