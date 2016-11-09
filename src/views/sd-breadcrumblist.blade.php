<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!--  Structured Data : BreadcrumbList -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
@if(is_array(Seo::get('breadcrumblist')))
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        @foreach(Seo::get('breadcrumblist') as $i => $item)
            {
                "@type": "ListItem",
                "position": {{ $i + 1 }},
                "item": {
                    "@id": "{{ $item['url'] }}",
                    "name": "{!! $item['title'] !!}"
                }
            } {{ ($i < count(Seo::get('breadcrumblist')) - 1) ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif