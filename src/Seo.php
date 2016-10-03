<?php

namespace Helori\LaravelSeo;

use Illuminate\Support\Facades\URL;

/**
	List of keys : 
	Website : global-title, logo-url, search-url
	Current Page : title, description, keywords, facebook-image-url
*/
class Seo
{
	protected $data = [];
	protected $similarTo = [];
	protected $contactPoints = [];

	public function __construct(){
		
	}

	public function dataAccessor($key, $value = null)
	{
		if($value){
			$this->data[$key] = $value;
		}else{
			return isset($this->data[$key]) ? $this->data[$key] : '';
		}
	}

	public function has($key)
	{
		return isset($this->data[$key]);
	}

	public function get($key)
	{
		return isset($this->data[$key]) ? $this->data[$key] : '';
	}

	public function set($key, $value)
	{
		$this->data[$key] = $value;
	}

	public function setSimilarTo($value)
	{
		$this->similarTo[] = $value;
	}

	public function similarTo()
	{
		return $this->similarTo;
	}

	public function setContactPoint(array $value)
	{
		$this->contactPoints[] = $value;
	}

	public function contactPoints()
	{
		return $this->contactPoints;
	}
}