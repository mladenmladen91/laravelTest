<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Group;
use App\Note;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
    ];
});

$factory->define(Note::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
    ];
}); 

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'avatar' => 'admin.png',
        'address' => $faker->address,
        'country' => 'Montenegro',
        'zip' => '364343',
        'group_id' => function(){
            return factory('App\Group')->create()->id;
        },
        'phone' => $faker->phoneNumber,
        'remember_token' => Str::random(10),
    ];
});
