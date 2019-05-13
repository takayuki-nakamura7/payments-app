<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'zip_code' => $faker->numberBetween(0000000, 9999999),
        'company_seal' => $faker->imageUrl(),
    ];
});
