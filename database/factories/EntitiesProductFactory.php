<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Product::class, function (Faker $faker) {
    $input = [
        'name'             => $faker->word,
        'combination_code' => $faker->word,
        'color'            => $faker->colorName,
        'size'             => $faker->randomElement(['S', 'M', 'L']),
    ];
    $input['color_code'] = mb_substr($input['color'], 0, 2);
    $input['size_code'] = $input['size'];
    $input['product_id'] = sprintf('%s-%s-%s',
        $input['combination_code'], $input['color_code'], $input['size_code']
    );

    return $input;
});

$factory->define(App\Entities\Product::class, function (Faker $faker) {
//    $data = (function() {
//        $data = factory(\App\Entities\Product::class)->make()->toArray();
//        unset($data['product_id']);
//
//        return $data;
//    })();


    return (function() {
        $data = factory(\App\Entities\Product::class)->make()->toArray();
        unset($data['product_id']);

        return $data;
    })();
}, 'formData');