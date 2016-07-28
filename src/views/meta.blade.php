@if(isset($seo))
<title>{{ $seo['route']['title'] or '' }}</title>

<base href="{{ url('/') }}">

<meta charset="UTF-8" />
<meta name="description" content="{!! $seo['route']['description'] or '' !!}" />
<meta name="keywords" content="{!! $seo['route']['keywords'] or '' !!}" />
<meta name="author" content="{!! $seo['author'] or '' !!}" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />

<link rel="shortcut icon" href="favicon.png" type="image/png" />
<link rel="canonical" href="{{ Request::url() }}">
@endif