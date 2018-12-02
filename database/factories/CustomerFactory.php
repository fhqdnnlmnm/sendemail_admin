<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    static $categories;
    $categories = DB::table('categories')->pluck('id')->toArray();
    return [
        //
        "name" => $faker->company,
        "country" => $faker->country,
        "category_id" => array_rand($categories)
    ];
});
