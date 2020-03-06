<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use App\Album;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        //
        "name"=>$faker->word,
        "description"=>$faker->text,
        'url' => "https://picsum.photos/200",
        "id_album" => Album::inRandomOrder()->first()->id
    ];
});
