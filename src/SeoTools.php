<?php

namespace Helori\LaravelSeo;

use Illuminate\Support\Facades\Route;


class SeoTools
{
	public static function get()
	{
		$seo = config('laravel-seo');
		$route_name = Route::current()->getName();
		$locale = \App::getLocale();
	
		$seo_route = [
			'title' => '',
			'description' => '',
			'keywords' => '',
			'image' => '',
			'image_w' => '',
			'image_h' => '',
			'breadcrumb' => [],
		];

		if(isset($seo[$locale]))
		{
			if(isset($seo[$locale]['global']))
			{
				$seo_route = [
					'title' => isset($seo[$locale]['global']['title']) ? $seo[$locale]['global']['title'] : '',
					'description' => isset($seo[$locale]['global']['description']) ? $seo[$locale]['global']['description'] : '',
					'keywords' => isset($seo[$locale]['global']['keywords']) ? $seo[$locale]['global']['keywords'] : '',
					'image' => isset($seo[$locale]['global']['image']) ? $seo[$locale]['global']['image'] : '',
					'image_w' => isset($seo[$locale]['global']['image_w']) ? $seo[$locale]['global']['image_w'] : '',
					'image_h' => isset($seo[$locale]['global']['image_h']) ? $seo[$locale]['global']['image_h'] : '',
					'breadcrumb' => [],
				];
			}
			if(isset($seo[$locale]['routes'][$route_name]))
			{
				$s = $seo[$locale]['routes'][$route_name];
				$seo_route['title'] = isset($s['title']) ? $s['title'] : $seo_route['title'];
				$seo_route['description'] = isset($s['description']) ? $s['description'] : $seo_route['description'];
				$seo_route['keywords'] = isset($s['keywords']) ? $s['keywords'] : $seo_route['keywords'];
				$seo_route['breadcrumb'] = isset($s['breadcrumb']) ? $s['breadcrumb'] : $seo_route['breadcrumb'];
				$seo_route['image'] = isset($s['image']) ? $s['image'] : $seo_route['image'];
				$seo_route['image_w'] = isset($s['image_w']) ? $s['image_w'] : $seo_route['image_w'];
				$seo_route['image_h'] = isset($s['image_h']) ? $s['image_h'] : $seo_route['image_h'];
			}
			$result = $seo[$locale]['global'];
		}
		else
		{
			if(isset($seo['global']))
			{
				$seo_route = [
					'title' => isset($seo['global']['title']) ? $seo['global']['title'] : '',
					'description' => isset($seo['global']['description']) ? $seo['global']['description'] : '',
					'keywords' => isset($seo['global']['keywords']) ? $seo['global']['keywords'] : '',
					'image' => isset($seo['global']['image']) ? $seo['global']['image'] : '',
					'image_w' => isset($seo['global']['image_w']) ? $seo['global']['image_w'] : '',
					'image_h' => isset($seo['global']['image_h']) ? $seo['global']['image_h'] : '',
					'breadcrumb' => [],
				];
			}
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

		}

		
		$result['route'] = $seo_route;
		return $result;
	}
}