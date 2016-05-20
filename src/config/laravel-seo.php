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
		'addressRegion' => '',
		'areaserved' => '',
		'postalCode' => '',
		'contactType' => '',
		'sameAs' => [],
		'fb_app_id' => '',
		'twitter_sign' => '@',
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
