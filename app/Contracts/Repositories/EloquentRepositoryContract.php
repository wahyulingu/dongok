<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface EloquentRepositoryContract extends RepositoryContract
{
    public function all($columns = ['*']): Collection;

    public function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null): LengthAwarePaginator;

    public function find($id, $columns = ['*']): Model;
}
