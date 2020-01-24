<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Coupon::class, function (Faker $faker) {
    return [
        'c_name' => $faker->name,
        'c_minPrice' => $faker->numberBetween(1000, 10000),
        'c_percentDiscount' => $faker->numberBetween(10, 50),
        'c_validity' => $faker->date(),
        'c_maxDiscount' => $faker->numberBetween(500, 1000),
        'c_paymentMethod' => $faker->text(10),
        'c_cashbackType' => $faker->text(10)
    ];
});

