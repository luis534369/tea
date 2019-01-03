<?php

use Faker\Generator as Faker;

//创建生成用户名的工厂
$factory->define(App\User::class, function (Faker $faker) {
//    $faker = Faker\Factory::create('zh_CN');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        "tel"=>"15010937041",
        'age'=>rand(12,60),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
