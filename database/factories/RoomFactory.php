<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentences(4, true),
        'type' => 'chatRoom',
        'user_id' => 0
    ];
});
