@if(isset($seo))
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<% isset($seo['route']['description']) ? $seo['route']['description'] : '' %>">
<meta name="twitter:title" content="<% isset($seo['route']['title']) ? $seo['route']['title'] : '' %>">
<meta name="twitter:site" content="<% isset($seo['twitter_sign']) ? $seo['twitter_sign'] : '' %>">
@endif