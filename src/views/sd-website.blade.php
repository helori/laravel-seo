<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!--  Structured Data : Website -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "WebSite",
    "name" : "{{ Seo::get('global-title') }}",
    "url" : "{{ url('/') }}"
    @if(Seo::has('search-url'))
    ,"potentialAction": {
        "@type": "SearchAction",
        "target": "{{ Seo::get('search-url') }}?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
    @endif
}
</script>