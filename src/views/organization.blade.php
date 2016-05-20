<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "<% isset($seo['title']) ? $seo['title'] : '' %>",
    "url" : "<% isset($seo['url']) ? $seo['url'] : '' %>",
    "sameAs" : [
        @foreach($seo['sameAs'] as $i => $url)
            "<% $url %>"
            @if($i < count($seo['sameAs']) - 1)
                ,
            @endif
        @endforeach
    ],
    "logo" : "<% isset($seo['logo']) ? $seo['logo'] : '' %>"
}
</script>