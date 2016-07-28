@if(isset($seo))
@if(count($seo['route']['breadcrumb']) > 0)
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        <?php $i = 1; ?>
        @foreach($seo['route']['breadcrumb'] as $name => $item)

            {
                "@type": "ListItem",
                "position": {{ $i }},
                "item": {
                    "@id": "{{ $item['url'] }}",
                    "name": "{!! $item['title'] !!}"
                    @if(isset($item['image']) && $item['image'])
                    ,"image": "{{ $item['image'] }}"
                    @endif
                }
            }
            @if($i < count($seo['route']['breadcrumb']) - 1)
            ,
            @endif

            <?php ++$i; ?>

        @endforeach
    ]
}
</script>
@endif
@endif