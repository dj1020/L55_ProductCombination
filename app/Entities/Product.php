<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'combination_code',
        'color',
        'color_code',
        'size',
        'size_code',
    ];
}
