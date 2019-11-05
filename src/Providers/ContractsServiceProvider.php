<?php

namespace Omt\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Omt\Modules\Contracts\RepositoryInterface;
use Omt\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
