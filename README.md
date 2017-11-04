# Laravel Module

## Introduce

Laravel module sample with CRUD handle.

Using laravel popular packages:

- laracasts/flash

- laravelcollective/html

- prettus/l5-repository

## Prerequisite

- PHP 7.0

- Laravel 5.5.0

## Install

To install through Composer, by run the following command:

``` bash
composer require unet/laravel-module --dev
```

The package will automatically register a service provider.

Optionally, publish the package's file by running:

``` bash
php artisan vendor:publish --provider="Unet\Module\Providers\ServiceProvider"
```