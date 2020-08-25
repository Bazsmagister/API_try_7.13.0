<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GuzzlePost;
use Faker\Generator as Faker;

$factory->define(GuzzlePost::class, function (Faker $faker) {
    return [
          'name' => $faker->name,
    ];
});
