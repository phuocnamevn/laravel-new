<?php

namespace App\Providers;

use App\Repositories\Interfaces\PermissionGroupInterface;
use App\Repositories\PermissionGroup;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PermissionGroupInterface::class,
            PermissionGroup::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
