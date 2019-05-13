<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'order_no' => $faker->password,
        'price' => $faker->numberBetween(1000, 1000000),
        'customer' => $faker->name,
        'issue_date' => $faker->date(),
        'note' => $faker->sentence(),
        'method' => $faker->randomElement(['銀行振込', 'クレジットカード', '代金引換']),
    ];
});
