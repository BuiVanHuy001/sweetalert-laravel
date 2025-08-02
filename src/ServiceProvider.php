<?php

declare(strict_types=1);

namespace SweetAlert;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sweetalert2');
    }

    public function register(): void
    {
        $this->app->singleton('sweetalert', function () {
            return new Swal();
        });
    }
}
