<meta property="og:locale" content="{{ Seo::get('og-locale') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:site_name" content="{{ Seo::get('global-title') }}" />
<meta property="og:title" content="{{ Seo::get('title') ? Seo::get('title') : Seo::get('global-title') }}" />
<meta property="og:description" content="{{ Seo::get('description') ? Seo::get('description') : Seo::get('global-description') }}" />

@if(Seo::get('fb-app-id'))
	<meta property="fb:app_id" content="{{ Seo::get('fb-app-id') }}" />
@endif

<?php

$path = '';
$mime = null;
$w = null;
$h = null;

$path = ((substr(Seo::get('image'), 0, 1) !== '/') ? '/' : '').Seo::get('image');
if(!is_file(public_path().$path)){
	$path = ((substr(Seo::get('global-image'), 0, 1) !== '/') ? '/' : '').Seo::get('global-image');
}

if(is_file(public_path().$path)){
	$info = getimagesize(public_path().$path);
	$w = isset($info[0]) ? $info[0] : 0;
	$h = isset($info[1]) ? $info[1] : 0;
	$mime = isset($info['mime']) ? $info['mime'] : '';
}

?>

@if($mime && $w && $h)
	<meta property="og:image" content="{{ asset($path) }}" />
	<meta property="og:image:type" content="{{ $mime }}" />
	<meta property="og:image:width" content="{{ $w }}" />
	<meta property="og:image:height" content="{{ $h }}" />
@endif