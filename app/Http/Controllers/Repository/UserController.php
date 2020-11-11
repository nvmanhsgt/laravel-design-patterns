<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $productRepository)
    {
        $this->userRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        return $this->userRepository->all();
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return array
     */
    public function show($id): array
    {
        return $this->userRepository->find($id);
    }
}
