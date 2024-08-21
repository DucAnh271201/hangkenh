<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    //model muốn tương tác
    /**
     * @var Model
     */
    protected $model;

    //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll(): mixed
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }


    public function findBySlug($slug)
    {
        return $this->model::query()->where('slug', $slug)->first();
    }

    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function deleteByIds(array $ids = [])
    {
        return $this->model::query()->whereIn('id', $ids)->delete();
    }

    public function query(): Builder
    {
        return $this->model::query();
    }
}
