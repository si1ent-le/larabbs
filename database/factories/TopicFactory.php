<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    $sentence = $faker->sentence();
    //随机取一个月内的时间
    $updated_at = $faker->dateTimeThisMonth();

    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        // 'name' => $faker->name,
        'title' => $sentence,
        'body' => $faker->text(),
        'excerpt' => $sentence,
        'user_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'category_id' => $faker->randomElement([1,2,3,4]),
        'created_at' =>$created_at,
        'updated_at' =>$updated_at,
    ];
});
