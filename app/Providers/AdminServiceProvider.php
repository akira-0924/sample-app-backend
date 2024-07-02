<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Usecase\Admin\Owner\Index\InteractorInterface;
use Packages\Domain\Application\Admin\Owner\IndexInteractor;
use Packages\Infrastructure\Admin\Owner\OwnerRepository;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(InteractorInterface::class, function ($app) {
            return new IndexInteractor(
                new OwnerRepository()
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
