<?php

namespace Helori\LaravelSeo;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laravel-seo.php', 'laravel-seo'
        );
    }
    
    public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/views', 'laravel-seo');

		$this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/laravel-seo'),
        ], 'views');

		$this->publishes([
            __DIR__.'/config/laravel-seo.php' => config_path('laravel-seo.php')
        ], 'config');
	}
}
