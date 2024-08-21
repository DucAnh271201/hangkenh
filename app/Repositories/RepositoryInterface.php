<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll(): mixed;

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id);

    public function query(): Builder;
    /**
     * Get one
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug);
    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes = []);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes = []);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param array $ids
     * @return mixed
     */
    public function deleteByIds(array $ids = []);
}
