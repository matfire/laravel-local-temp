# Laravel Local Temp
> a package to allow the creation of a temporary url using the `local` driver in laravel

![Packagist Version](https://img.shields.io/packagist/v/matfire/laravel-local-temp-urls?style=for-the-badge&link=https%3A%2F%2Fpackagist.org%2Fpackages%2Fmatfire%2Flaravel-local-temp-urls)

## Features

Adds a `temporaryUrl()` method to the local disk driver in [Laravel](https://laravel.com) that works like the one implemente in the `s3` driver, allowing you to generate a temporary signed url to a non public resource

## Usage

In a blade template, you can now call 
```blade
{{ Storage::temporaryUrl($filePath, now()) }}
```
even for files stored in 'local' driver


## Installation

```bash
composer require matfire/laravel-local-temp-urls
```

And you should be good to go!


