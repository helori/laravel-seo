<?php

namespace Helori\LaravelSeo;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('seo', 'Helori\LaravelSeo\Seo');
    }
    
    public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/views', 'laravel-seo');

		$this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/laravel-seo'),
        ], 'views');
	}
}
