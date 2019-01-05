<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EmailTemplate::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'description'=>$faker->text(),
        'subject'=>'subject',
        'content'=>'test'
    ];
});
