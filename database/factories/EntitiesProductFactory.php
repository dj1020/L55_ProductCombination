<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Product::class, function (Faker $faker) {
    $input = [
        'product_name'     => $faker->word,
        'combination_code' => $faker->word,
        'color'            => $faker->colorName,
        'size'             => $faker->randomElement(['S', 'M', 'L']),
    ];
    $input['product_id'] = sprintf('%s-%s-%s', $input['combination_code'], $input['color'], $input['size']);
    $input['color_code'] = mb_substr($input['color'], 0, 2);
    $input['size_code'] = $input['size'];

    return $input;
});
