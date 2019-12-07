<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\article;
use Faker\Generator as Faker;

$factory->define(article::class, function (Faker $faker) {
    return [
        //
        'title'=> $faker->sentence,
        'body'=> $faker->paragraph,
    ];
});
