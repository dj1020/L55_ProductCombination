<?php

namespace App\Repositories;

abstract class BaseRepo
{
    protected $model;

    /**
     * BaseRepo constructor.
     */
    public function __construct()
    {
        $this->model = $this->model();
    }

    abstract protected function model();
}