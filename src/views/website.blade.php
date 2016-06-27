@if(isset($seo))
<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "WebSite",
    "name" : "{!! $seo['title'] or '' !!}",
    "url" : "{!! $seo['url'] or '' !!}",
    @if(isset($seo['search_url']) && $seo['search_url'])
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{!! $seo['search_url'] !!}?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
    @endif
}
</script>
@endif