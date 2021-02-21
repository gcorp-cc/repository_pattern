<?php

namespace App\Providers;

use App\Repository\UserRepository\EloUserRepository;
use App\Repository\UserRepository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class UserRepositoryServeisProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /** For Call UserRepositoryInterface Bind To EloUserRepository**/
       $this->app->bind(UserRepositoryInterface::class ,EloUserRepository::class);
    }
}
