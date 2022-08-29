<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SorteMilhaoNumero as model;
use Faker\Generator as Faker;
use App\SorteMilhaoNumero;

$factory->define(model::class, function (Faker $faker) {
    $todas_letras_possiveis = "ACEFGHJKMNPRSTUVXWYZ";
    //$todas_letras_possiveis = "ACEFGHJKMNPRSTUVXWYZ";
    //$quantidade_Caracteres = "6";
    

    
    //while True {
    //    
        try {
            return [
                'CodSeguranca' => $faker -> regexify("[$todas_letras_possiveis]{6}")
            ];

        } catch (Exception $e){
            
        }
    //}
});

