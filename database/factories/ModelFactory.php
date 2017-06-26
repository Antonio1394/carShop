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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Juan Antonio',
        'user' => 'admin@gmail.com',
        'password' => bcrypt('123456789'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Cliente::class, function (Faker\Generator $faker) {
    return [
            'nombre'    => $faker->name,
            'apellido'  => $faker->lastName,
            'direccion' => $faker->address,
            'NIT' => $faker->e164PhoneNumber
          ];
});
