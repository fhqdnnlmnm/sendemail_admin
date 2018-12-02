<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Models\Category::class,function(Faker $faker){
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'order' => $faker->randomDigitNotNull,
    ];
});

$factory->defineAs(App\Models\Category::class,'parent', function (Faker $faker) use ($factory) {
    $category = $factory->raw(App\Models\Category::class);
    return array_merge($category,['parent_id' => 0]);
});

$factory->defineAs(App\Models\Category::class,'children', function (Faker $faker) use ($factory) {
    $category = $factory->raw(App\Models\Category::class);
    $parent_ids = DB::table('categories')->pluck('id')->toArray();
    return array_merge($category,['parent_id' => array_rand($parent_ids)]);
});
