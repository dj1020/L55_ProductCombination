<?php

namespace App\Repositories;

/**
 * Class ProductRepo
 * @package App\Repositories
 * @property \App\Entities\Product $model
 */
class ProductRepo extends BaseRepo
{
    protected function model()
    {
        $this->model = new \App\Entities\Product();

        return $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }
}