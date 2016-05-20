@if(count($seo['route']['breadcrumb']) > 0)
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        @foreach($seo['route']['breadcrumb'] as $i => $item)

            {
                "@type": "ListItem",
                "position": <% $i + 1 %>,
                "item": {
                    "@id": "<% $item['url'] %>",
                    "name": "<% $item['title'] %>"
                    @if(isset($item['image']) && $item['image'])
                    ,"image": "<% $item['image'] %>"
                    @endif
                }
            }
            @if($i < count($seo['route']['breadcrumb']) - 1)
            ,
            @endif

        @endforeach
    ]
}
</script>
@endif