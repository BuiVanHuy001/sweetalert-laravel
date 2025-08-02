# SweetAlert Laravel

**SweetAlert Laravel** is a simple integration package that brings [SweetAlert2](https://sweetalert2.github.io/) into your Laravel application with minimal setup.

This package allows you to easily display beautiful alert dialogs from both **Blade** and **Livewire**, without the need to manually install SweetAlert2 via npm or configure imports.

## Installation

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

## Usage

### Displaying via session

In your controller:

```php
// Using the Swal facade

\SweetAlert\Facades\Swal::fire([
    'icon' => 'success',
    'title' => 'Success!',
    'text' => 'Your action was successful.',
]);

// Or using the redirect helper
return redirect()->back()->with('swal', [
    'icon' => 'success',
    'title' => 'Success!',
    'text' => 'Your action was successful.',
]);
```

#### Displaying via Livewire

In your Livewire component:

```php
use SweetAlert\Facades\Swal;

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