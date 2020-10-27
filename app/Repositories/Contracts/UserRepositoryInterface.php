<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function all(): array;

    public function find($id): array;
}
