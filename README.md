# laravel-seo
SEO tools to insert meta and structured-data in laravel projects

## Installation and setup

```bash
composer require helori/laravel-seo:dev-master
```

Configure your application:
```php
// config/app.php
'providers' => [
    ...
    Helori\LaravelSeo\SeoServiceProvider::class,
];
'aliases' => [
	...
	'Seo' => Helori\LaravelSeo\Facades\Seo::class,
];
```

Publish the views if you wish to overwite the defaults:
```bash
php artisan vendor:publish --provider="Helori\LaravelSeo\SeoServiceProvider" --tag="views"
```

## How to use

In your layout, include theses views as needed:
```html
<head>
    @include('laravel-seo::meta-facebook')
    @include('laravel-seo::meta-twitter')
</head>
<body>
	@include('laravel-seo::sd-organization')
	@include('laravel-seo::sd-local-business')
	@include('laravel-seo::sd-website')
	@include('laravel-seo::sd-breadcrumblist')
</body>
```
You can also include SEO information directly without using built-in views :
```html
<meta name="description" content="{{ Seo::get('description') }}" />
```

Add SEO information from your controller using the SEO facade. For example :
```php
// ---------------------------------------------------------------------
//	SEO data shared between views :
// ---------------------------------------------------------------------
public function __construct(){
	Seo::set('global-title', 'Website name');
    Seo::set('global-description', 'Website description');

    Seo::set('logo-url', 'logo url');
    Seo::set('search-url', 'search url for structured data');
    Seo::set('latitude', 48.8256);
    Seo::set('longitude', 2.3258);

    Seo::set('email', 'organization email');
    Seo::set('phone', 'organization phone');
    Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr 09:00-20:00');
    Seo::set('street-address', '1, welcome street');
    Seo::set('address-locality', 'Paris');
    Seo::set('address-region', '');
    Seo::set('address-country', 'FR');
    Seo::set('postal-code', '75008');
    Seo::set('area-served', 'FR');

    Seo::setSimilarTo('https://www.facebook.com/my-facebook-page');
    Seo::setSimilarTo('https://twitter.com/my-twitter-page');

    Seo::setContactPoint([
        'type' => 'customer-service',
        'phone' => 'phone number',
        'area-served' => 'FR',
        'opening-hours' => 'Mo,Tu,We,Th,Fr 09:00-20:00',
        'available-languages' => ['French']
    ]);

    Seo::set('og-locale', 'fr_FR');
    Seo::set('og-image-url', 'facebook_image_url');
    Seo::set('og-image-type', 'image/jpeg');
    Seo::set('og-image-width', 1200);
    Seo::set('og-image-height', 630);

    Seo::set('fb-app-id', 'My facebook app ID');
    Seo::set('twitter-sign', '@My_Twitter_Account');
}

// ---------------------------------------------------------------------
//	Page specific SEO data :
// ---------------------------------------------------------------------
public function home(){
	Seo::set('title', 'My home page title');
	Seo::set('description', "My home page description");
	Seo::set('keywords', "my,home,page,keywords");
	Seo::set('breadcrumblist', [
	    ['title' => 'Page short title', 'url' => 'page_url'],
	    ['title' => 'Sub-Page short title', 'url' => 'sub_page_url'],
	]);	
}
```


