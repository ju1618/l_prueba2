<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence(5, true),
        'price'=> $faker->randomFloat(2,100,9999999),
        'image'=> $faker->imageUrl(300,200,'dogs')
    ];
});
