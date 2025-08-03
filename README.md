# SweetAlert Laravel

**SweetAlert Laravel** is a simple integration package that brings [SweetAlert2](https://sweetalert2.github.io/) into your Laravel application with minimal setup. This package allows you to easily use Sweetalert from both **Blade** and **Livewire**, without the need to manually install SweetAlert2 via npm or configure imports.

## Installation

To install the SweetAlert Laravel package, you can use Composer. Run the following command in your terminal at the root of your Laravel project:

```bash
composer require buivanhuy/sweetalert-laravel
php artisan vendor:publish --tag=public
```

> [!NOTE]
> This will publish the SweetAlert2 assets to your public/vendor/sweetalert2 directory.

Include `swal:index` your layout file

```blade
@include('swal::index')
```
#### Example layout file

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('swal::index')
        <title>Web title</title>
    </head>
    <body>
    </body>
</html>
```

## Usage

### Displaying via session

In your controller:

```php
// Using the Swal facade
use SweetAlert\Swal;

Swal::fire([
    'icon' => 'success',
    'title' => 'Success!',
    'text' => 'Your action was successful.',
]);

// Or
return redirect()->back()->with('swal', [
    'icon' => 'success',
    'title' => 'Success!',
    'text' => 'Your action was successful.',
]);
```

#### Displaying via Livewire

In your Livewire component:

```php
public function someAction()
{
    $this->dispatch('swal', [
        'icon' => 'success',
        'title' => 'Success!',
        'text' => 'Your action was successful.',
    ]);
}
```

The full list of options can be found in the [SweetAlert2 documentation](https://sweetalert2.github.io/#configuration).