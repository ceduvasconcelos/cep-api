<?php

namespace App\Providers;

use App\Contracts\PostalCodeApi;
use App\Services\ViaCepService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PostalCodeApi::class, fn ($app) => new ViaCepService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
