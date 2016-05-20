<?php

namespace Helori\LaravelSeo;

use Illuminate\Support\Facades\Route;


class SeoTools
{
	public static function get()
	{
		$seo = config('laravel-seo');
		$route_name = Route::current()->getName();
		$seo_route = [
			'title' => isset($seo['title']) ? $seo['title'] : '',
			'description' => isset($seo['description']) ? $seo['description'] : '',
			'keywords' => isset($seo['keywords']) ? $seo['keywords'] : '',
			'image' => isset($seo['image']) ? $seo['image'] : '',
			'image_w' => isset($seo['image_w']) ? $seo['image_w'] : '',
			'image_h' => isset($seo['image_h']) ? $seo['image_h'] : '',
			'breadcrumb' => []
		];
		if(isset($seo['routes'][$route_name]))
		{
			$s = $seo['routes'][$route_name];
			$seo_route['title'] = isset($s['title']) ? $s['title'] : $seo_route['title'];
			$seo_route['description'] = isset($s['description']) ? $s['description'] : $seo_route['description'];
			$seo_route['keywords'] = isset($s['keywords']) ? $s['keywords'] : $seo_route['keywords'];
			$seo_route['breadcrumb'] = isset($s['breadcrumb']) ? $s['breadcrumb'] : $seo_route['breadcrumb'];
			$seo_route['image'] = isset($s['image']) ? $s['image'] : $seo_route['image'];
			$seo_route['image_w'] = isset($s['image_w']) ? $s['image_w'] : $seo_route['image_w'];
			$seo_route['image_h'] = isset($s['image_h']) ? $s['image_h'] : $seo_route['image_h'];
		}
		$result = $seo['global'];
		$result['route'] = $seo_route;
		return $result;
	}
}