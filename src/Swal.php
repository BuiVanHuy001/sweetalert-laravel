<?php

declare(strict_types=1);

namespace SweetAlert;

use Illuminate\Support\Facades\Session;

class Swal
{
    public static function fire(array $options = []): void
    {
        Session::flash('sweetalert2', $options);
    }

    public static function success(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'icon' => 'success',
            ...$options,
        ]);
    }

    public static function error(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'icon' => 'error',
            ...$options,
        ]);
    }

    public static function warning(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'icon' => 'warning',
            ...$options,
        ]);
    }

    public static function info(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'icon' => 'info',
            ...$options,
        ]);
    }

    public static function question(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'icon' => 'question',
            ...$options,
        ]);
    }

    public static function toast(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            ...$options,
        ]);
    }

    public static function toastSuccess(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            'icon' => 'success',
            ...$options,
        ]);
    }

    public static function toastError(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            'icon' => 'error',
            ...$options,
        ]);
    }

    public static function toastWarning(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            'icon' => 'warning',
            ...$options,
        ]);
    }

    public static function toastInfo(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            'icon' => 'info',
            ...$options,
        ]);
    }

    public static function toastQuestion(array $options = []): void
    {
        Session::flash('sweetalert2', [
            'toast' => true,
            'icon' => 'question',
            ...$options,
        ]);
    }
}
