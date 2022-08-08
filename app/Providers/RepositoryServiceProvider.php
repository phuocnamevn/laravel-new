<?php

namespace App\Providers;

use App\Repositories\Admin\PermissionGroup\PermissionGroupInterface;
use App\Repositories\Admin\PermissionGroup\PermissionGroupRepository;
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
            PermissionGroupRepository::class
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
