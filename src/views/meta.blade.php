<title><% isset($seo['title']) ? $seo['title'] : '' %></title>
<base href="<% url('/') %>">
<meta charset="UTF-8" />
<meta name="description" content="<% isset($seo['description']) ? $seo['description'] : '' %>" />
<meta name="keywords" content="<% isset($seo['keywords']) ? $seo['keywords'] : '' %>" />
<meta name="author" content="<% isset($seo['author']) ? $seo['author'] : '' %>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<link rel="shortcut icon" href="favicon.png" type="image/png" />
<link rel="canonical" href="<% Request::url() %>">