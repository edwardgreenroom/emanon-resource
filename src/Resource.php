<?php

namespace Emanon\Resource;

class Resource
{
    protected $model;

    /**
     * Retrieve all records
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Setting the model
     *
     * @param $model
     * @return mixed
     */
    public function set($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Getting the model
     *
     * @return mixed
     */
    public function get()
    {
        return $this->model;
    }

    /**
     * Find record by id
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model = $this->model->find($id);
    }

    /**
     * Store new record
     *
     * @param $attributes
     * @return mixed
     */
    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update existing record
     *
     * @param $attributes
     * @return mixed
     */
    public function update($attributes)
    {
        return $this->model->update($attributes);
    }

    /**
     * Destroy existing record
     *
     * @return mixed
     */
    public function destroy()
    {
        return $this->model->delete();
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->model->first();
    }
}
