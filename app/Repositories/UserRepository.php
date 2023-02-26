<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryContract;
use App\Models\User;

class UserRepository extends Repository implements UserRepositoryContract
{
    protected function model(): User
    {
        return app(User::class);
    }
}
