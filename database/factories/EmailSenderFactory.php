<?php

use Faker\Generator as Faker;

$factory->define(App\Models\EmailSender::class, function (Faker $faker) {
    return [
        //
        'email'=>$faker->safeEmail(),
        'description'=>	$faker->text($maxNbChars = 50)
    ];
});
