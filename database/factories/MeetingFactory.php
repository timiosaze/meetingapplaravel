<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meeting;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Meeting::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'meeting_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 months', $timezone = null),
    ];
});
