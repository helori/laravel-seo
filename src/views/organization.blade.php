<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "{!! $seo['title'] or '' !!}",
    "url" : "{!! $seo['url'] or '' !!}",
    "sameAs" : [
        @foreach($seo['sameAs'] as $i => $url)
            "{!! $url !!}"
            @if($i < count($seo['sameAs']) - 1)
                ,
            @endif
        @endforeach
    ],
    "logo" : "{!! $seo['logo'] or '' !!}"
}
</script>