<?php

namespace App\Contracts\Repositories;

use Illuminate\Contracts\Support\Arrayable;

interface RepositoryContract
{
    public function getAll(): Arrayable;

    public function find($id): Arrayable;

    public function create(array $data): Arrayable;

    public function update($id, array $data): bool;

    public function delete($id): bool;
}
