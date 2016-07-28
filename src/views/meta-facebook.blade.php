@if(isset($seo))
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:site_name" content="{{ isset($seo['title']) ? $seo['title'] : '' }}" />
<meta property="og:title" content="{{ isset($seo['route']['title']) ? $seo['route']['title'] : '' }}" />
<meta property="og:description" content="{{ isset($seo['route']['description']) ? $seo['route']['description'] : '' }}" />
<meta property="og:image" content="{{ isset($seo['route']['image']) ? $seo['route']['image'] : '' }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="{{ isset($seo['route']['image_w']) ? $seo['route']['image_w'] : '' }}" />
<meta property="og:image:height" content="{{ isset($seo['route']['image_h']) ? $seo['route']['image_h'] : '' }}" />
<meta property="fb:app_id" content="{{ isset($seo['fb_app_id']) ? $seo['fb_app_id'] : '' }}" />
@endif