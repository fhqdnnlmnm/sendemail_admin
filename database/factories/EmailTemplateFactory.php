<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EmailTemplate::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name();
        'description'=>$faker->text(),
        'subject'=>$faker->subject(),
        'content'=>$faker->
    ];
});
