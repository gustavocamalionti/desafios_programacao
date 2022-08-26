<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Provider\Base as Faker;

$factory->define(App\SorteMilhaoNumero::class, function (Faker $faker) {
    return [
        'CodSeguranca' => $faker -> numerify('Hello ###');
    ];
});
