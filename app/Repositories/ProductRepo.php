<?php

namespace App\Repositories;

/**
 * Class ProductRepo
 * @package App\Repositories
 * @property \App\Entities\Product $model
 */
class ProductRepo extends BaseRepo
{
    public function create(array $inputs)
    {
        $inputs = collect($inputs);
        $inputs['product_id'] = sprintf('%s-%s-%s',
            $inputs->get('combination_code'),
            $inputs->get('size_code'),
            $inputs->get('color_code')
        );

        $product = $this->model->newQuery()->create($inputs->toArray());

        return $product;
    }

    protected function model()
    {
        $this->model = new \App\Entities\Product();

        return $this->model;
    }

    public function all()
    {
        return $this->model->latest()->get();
    }
}