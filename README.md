# laravel-crudui
SEO tools to insert meta and structured-data in laravel projects

## Installation and setup

```bash
composer require helori/laravel-seo
```

Configure your application:
```php
// config/app.php
'providers' => [
    ...
    Helori\LaravelSeo\SeoServiceProvider::class,
];
```
Publish the config file:
```bash
php artisan vendor:publish --provider="Helori\LaravelSeo\SeoServiceProvider" --tag="config"
```

Publish the views if you wish to overwite the defaults:
```bash
php artisan vendor:publish --provider="Helori\LaravelSeo\SeoServiceProvider" --tag="views"
```

## How to use

Add all information about your website in config/laravel-seo.
In your controller, add these lines when calling your views :
```php
$seo = \Helori\LaravelSeo\SeoTools::get();
return view('your_view', ['seo' => $seo]);
```

In your layout, include theses views as needed:
```html
<head>
	@include('laravel-seo:meta')
    @include('laravel-seo:meta-facebook')
    @include('laravel-seo:meta-twitter')
</head>
<body>
	@include('laravel-seo:local-business')
	@include('laravel-seo:organization')
	@include('laravel-seo:website')
	@include('laravel-seo:breadcrumb')
</body>
```

