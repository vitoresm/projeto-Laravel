<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nome' => "teste",
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        
        'estado' => 'SANTA CATARINA',
        'cidade' => 'Jaraguá do SUl',
        'bairro' => 'Irineu',
        'rua'   => 'Rua kochela',
        'numero' => $faker->randomDigit,
        'complemento' => 'perto da casa do ze',

        
    ];
});
