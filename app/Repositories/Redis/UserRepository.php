<?php

namespace App\Repositories\Redis;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all(): array
    {
        return ['Get all users from redis'];
    }

    public function find($id): array
    {
        return ["Get user by ID: {$id}"];
    }
}
