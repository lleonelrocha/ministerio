<?php

namespace App\Http\Repositories;

abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function find($id)
    {
    return $this->model->findOrFail($id);
    }

    public function create($datos)
    {
        $registro = $this->model->create($datos);
        return $registro;
    }

    public function edit($model, $datos)
    {
        $model->fill($datos);
        $model->save();
        return $model;
    }


    public function delete($model)
    {
        return $model->delete();
    }


}