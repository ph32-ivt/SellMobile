<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'parent_id'=>rand(10),
        'cate_slug'=>$faker->name
    ];
});
