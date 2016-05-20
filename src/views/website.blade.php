<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "WebSite",
    "name" : "<% isset($seo['title']) ? $seo['title'] : '' %>",
    "url" : "<% isset($seo['url']) ? $seo['url'] : '' %>",
    @if(isset($seo['search_url']) && $seo['search_url'])
    "potentialAction": {
	    "@type": "SearchAction",
	    "target": "<% $seo['search_url'] %>/{search_term_string}",
	    "query-input": "required name=search_term_string"
	}
	@endif
}
</script>
