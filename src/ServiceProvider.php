<?php

declare(strict_types=1);

namespace SweetAlert;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../resources/js/sweetalert2.all.min.js' => public_path('vendor/sweetalert2/sweetalert2.all.min.js'),
        ], 'public');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'swal');
    }

    public function register(): void
    {
        $this->app->singleton('sweetalert', function () {
            return new Swal();
        });
    }
}