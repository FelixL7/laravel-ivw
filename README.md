# Laravel IVW Integration
 An easy [IVW](https://www.ivw.eu/) integration for Laravel Apps

## Installaltion

You can install the package via Composer:

```bash
composer require felixl7/laravel-ivw
```

In Laravel 5.5 and up, the package will automatically register the service provider and facade

In Laravel 5.4 or below start by registering the package's service provider and facade:

```php
// config/app.php

'providers' => [
    ...
    FelixL7\LaravelIvw\IvwServiceProvider::class,
],

'aliases' => [
    ...
    'Ivw' => FelixL7\LaravelIvw\IvwFacade::class,
],
```

*The facade is optional, but the rest of this guide assumes you're using the facade.*

Next, publish the config files:

```bash
php artisan vendor:publish --provider="FelixL7\LaravelIvw\IvwServiceProvider" --tag="config"
```

Optionally publish the view files. It's **not** recommended to do this unless necessary so your views stay up-to-date in future package releases.

```bash
php artisan vendor:publish --provider="FelixL7\LaravelIvw\IvwServiceProvider" --tag="views"
```

## Configuration

The configuration file is fairly simple.

```php
return [
    /**
     * By default, these keys values are empty strings.
     */
    'st' => env('IVW_DEFAULT_ST', ''),
    'cp' => env('IVW_DEFAULT_CP', ''),
    'sv' => env('IVW_DEFAULT_SV', ''),
    'co' => env('IVW_DEFAULT_CO', ''),

    /*
     * Enable or disable script rendering. Useful for local development. By default, it is disabled.
     */
    'enabled' => env('IVW_ENABLED', false),

];

```

As you can see, you can set the Default values in your .env file.

## Usage

You'll need to include IVW's script in the head section. Your iam_data configuration will be in the body.

```
{{-- layout.blade.php --}}
<html>
  <head>
    @include('ivw::head')
    {{-- ... --}}
  </head>
  <body>
    {{-- ... --}}
    @include('ivw::script')
  </body>
</html>
```

## Methods
```php
// Check whether script rendering is enabled
$enabled = Ivw::isEnabled(); // true|false

// Enable and disable script rendering
Ivw::enable();
Ivw::disable();

//get the DataLayer
//returns IvwIamData, this has basic getter & setter
$iam_data = Ivw::getIamData();

//returns the iam_data as json
$json = $iam_data->getIamDataJson();
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.