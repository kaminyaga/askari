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
        'sex' => ['Male', 'Female'][array_rand([0, 1])],
        'dob' => '12/13/1990',
        'phone_number' => '0712345678',
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

$factory->define(Askari\Robbery::class, function (Faker\Generator $faker) {
    return [
        'robbery_id' => $faker->word,
        'crime_id' => $faker->word,
        'evidence_id' => $faker->word,
        'offender_id' => 1,
        'user_id' => 1,
        'victims_name' => $faker->name,
        'crime_location' => $faker->word,
        'comments' => $faker->sentence,
    ];
});

$factory->define(Askari\Impound::class, function (Faker\Generator $faker) {
    return [
        'impound_id' => $faker->word,
        'make' => $faker->word,
        'licence_plate' => $faker->word,
        'offender_id' => 1,
        'dln' => $faker->word,
        'vehicle_type' => $faker->word,
        'citation_number' => $faker->word,
    ];
});

$factory->define(Askari\MissingPersons::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'sex'=> ['Male', 'Female'][array_rand([0, 1])],
        'dob'=> $faker->name,
        'national_id'=> $faker->name,
        'phone_number'=> $faker->phoneNumber,
        'guardians'=> $faker->name,
        'reporting_date' => $faker->date,
        'evidence_id' => 1,
        'date_last_seen' => $faker->date,
        'place_last_seen' => $faker->date,
        'suspects' => $faker->sentence,
    ];
});
