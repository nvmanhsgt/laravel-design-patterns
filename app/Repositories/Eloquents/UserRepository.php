<?php

namespace App\Repositories\Eloquents;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): array
    {
        return User::all()->toArray();
    }

    public function find($id): array
    {
        return User::find($id)->toArray();
    }
}
