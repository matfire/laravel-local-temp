<?php

namespace Matfire\LaravelLocalTempUrls;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class LocalTempUrlsProvider extends ServiceProvider
{
	public function register(): void
	{
	}
	public function boot(): void
	{
		Route::get('/local/temp/{path}', function(string $path) {
			return Storage::disk('local')->download($path);
		})->where('path', '.*')->name('local.temp');
		Storage::disk('local')->buildTemporaryUrlsUsing(function ($path, $expiration, $options) {
			return URL::temporarySignedRoute('local.temp', $expiration, array_merge($options, ['path' => $path]));
		});	
	}
}
