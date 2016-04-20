<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Askari\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'national_id' => rand(10000, 999999),
        'rank' => $faker->word,
        'department' => $faker->word,
        'police_id' => rand(10000, 999999),
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Askari\Offender::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'sex' => 'male',
        'dob' => '12/13/1990',
        'phone_number' => '0721949259',
        'user_id' => 1,
        'national_id' => rand(10000, 999999),
    ];
});

$factory->define(Askari\Traffic::class, function (Faker\Generator $faker) {
    return [
        'citation_number' => $faker->word,
        'traffic_id' => $faker->word,
        'traffic_offence' => $faker->sentence,
        'offender_id' => 1,
        'date_of_issue' => $faker->word,
        'court_date' => $faker->word,
        'user_id' => 1,
    ];
});
