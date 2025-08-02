<?php

declare(strict_types=1);

namespace SweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void fire(array $options = [])
 * @method static void success(array $options = [])
 * @method static void error(array $options = [])
 * @method static void warning(array $options = [])
 * @method static void info(array $options = [])
 * @method static void question(array $options = [])
 * @method static void toast(array $options = [])
 * @method static void toastSuccess(array $options = [])
 * @method static void toastError(array $options = [])
 * @method static void toastWarning(array $options = [])
 * @method static void toastInfo(array $options = [])
 * @method static void toastQuestion(array $options = [])
 */
class Swal extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sweetalert';
    }
}
