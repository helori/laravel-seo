<?php

//	config params can be set dynamically.
//	for routes, this can be done in RouteServiceProvider::map as such :
//
//	config([
//		'laravel-seo.routes.home.breadcrumb.home.url' => route('home')
//	]);

return [
	'global' => [
		'title' => '',
		'description' => '',
		'keywords' => '',
		'author' => '',
		'url' => '',
		'logo' => '',
		'image' => '',
		'image_w' => '',
		'image_h' => '',
		'email' => '',
		'phone' => '',
		'openingHours' => '',
		'streetAddress' => '',
		'addressLocality' => '',
		'addressRegion' => '',		
		'postalCode' => '',
		'addressCountry' => '',
		'areaserved' => '',
		'contactType' => '',
		'sameAs' => [],
		'fb_app_id' => '',
		'twitter_sign' => '@',
		'latitude' => 0,
		'longitude' => 0,
		'search_url' => 'https://query.example.com/search?q=',
	],
	'routes' => [
		'home' => [
			'title' => '',
			'description' => '',
			'keywords' => '',
			'image' => '',
			'image_w' => '',
			'image_h' => '',
			'breadcrumb' => [
				// Can contain multiple items:
    			'home' => [
    				//'title' => '', 
    				//'url' => '',
    				//'image' => ''
    			]
			],
		]
	]
];
