<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [
        "name" =>$faker->name,
        "saltname"=>$faker->title($gender = array_rand([null,'male','female'])),
        "sex"=>random_int(0,1),
        "post"=>$faker->jobTitle(),
        "email"=>$faker->safeEmail,
        // "customer_id"=>function(){
        //     return factory(App\Models\Customer::class)->create()-id;
        // },
        "description"=>$faker->text($maxNbChars = 50)
    ];
});
