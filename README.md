# Laravel Bootstrap Componets

This package contains a set of useful Bootstrap Laravel Blade components. It promotes DRY principles and allows you to keep your BLADE FILES nice and clean.

## Requirements

- [Laravel 12](https://laravel.com/)
- [Livewire 3](https://livewire.laravel.com/)
- [Column sorting with kyslik/column-sortable](https://github.com/Kyslik/column-sortable) (outdated)

## Installation

Install the package via composer:

```bash
composer require nfgarching/laravel-bootstrap-components
```

The package will automatically register itself. You can publish the package with:

```bash
php artisan vendor:publish --provider="Nfgarching\Componets\LibraryServiceProvider"
```

### Installation from https://github.com/nfgarching/laravel-bootstrap-componets

To test out the package installation, you’ll need a new Laravel project. Create a new project somewhere on your computer with the name e.g. example-app.

```bash
composer create-project laravel/laravel example-app
```

By default, Composer pulls in packages from Packagist so you’ll have to make a slight adjustment to your new project composer.json file. Open the file and update include the following array somewhere in the object:

```bash
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/nfgarching/laravel-bootstrap-componets"
    }
]
```

Execute the following command to install the package:

```bash
composer require nfgarching/laravel-bootstrap-components
```

The package will automatically register itself. You can publish the package with:

```bash
php artisan vendor:publish --provider="Nfgarching\Componets\LibraryServiceProvider"
```

### Installation with Git Clone for Development

To further develop the package, you’ll need a new Laravel project. Create a new project somewhere on your computer with the name e.g. example-app.

```bash
composer create-project laravel/laravel example-app
```

Clone the package as follow:

```bash
mkdir -p packages/nfgarching
cd packages/nfgarching
git clone git@github.com:nfgarching/laravel-bootstrap-componets.git
composer require livewire/livewire
```

Open composer.json an add in section

```bash
"autoload": {
    "psr-4": {
        ...,
        "Nfgarching\\Componets\\": "packages/nfgarching/laravel-bootstrap-componets/src/"
    }
},
```

Now, open the bootstrap/provider.php file and add to the providers array following:

```php
return [
   App\Providers\AppServiceProvider::class,
   Nfgarching\Componets\LibraryServiceProvider::class,
];
```

```bash
composer dump-autoload
php artisan vendor:publish --provider="Nfgarching\Componets\LibraryServiceProvider"
```

This will register the PackageServiceProvider class as one of the service providers for this project. Start the application using php artisan serve and visit the /dashboard route to get dashboard.

## Problem with Livewire 3 - How to Resolve the “419 Page Expired” Error

Soution ist to disable CSRF token for Livewire
[1](https://laravel.com/docs/12.x/csrf#csrf-excluding-uris)
[2](https://medium.com/@harrisrafto/excluding-uris-from-csrf-protection-in-laravel-e697a2415b9f)
[3](https://stackoverflow.com/questions/67782936/laravel-livewire-element-after-leave-a-text-field-gives-error-419)

Add in bootstrap\app.php

```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->validateCsrfTokens(except: [
        'livewire/*'
    ]);
})
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
