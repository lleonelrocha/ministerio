<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 22/06/2015
 * Time: 01:07 PM
 */

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

}