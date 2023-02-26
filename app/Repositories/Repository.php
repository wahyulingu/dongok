<?php

namespace App\Repositories;

use App\Contracts\Repositories\EloquentRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * @template M
 */
abstract class Repository implements EloquentRepositoryContract
{
    abstract protected function model(): Model;

    public function all($columns = ['*']): Collection
    {
        return $this->model()->all($columns);
    }

    public function getAll($columns = ['*']): Collection
    {
        return $this->all($columns);
    }

    public function find($id, $columns = ['*']): Model
    {
        return $this->model()->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model()->create($data);
    }

    public function update($id, array $data): bool
    {
        return $this->model()->whereKey($id)->update($data);
    }

    public function delete($id): bool
    {
        return $this->model()->whereKey($id)->delete();
    }

    public function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null): LengthAwarePaginator
    {
        return $this->model()->paginate($perPage, $columns, $pageName)->appends([$pageName => $page]);
    }
}
