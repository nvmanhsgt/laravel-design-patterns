<?php

namespace App\Providers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository as EloquentUserRepository;
use App\Repositories\Redis\UserRepository as RedisUserRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (App::environment('testing')) {
            $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        } else {
            $this->app->bind(UserRepositoryInterface::class, RedisUserRepository::class);
        }
    }
}
