@if(isset($seo))
<script type="application/ld+json"> 
{
    "@context" : "http://schema.org", 
    "@type" : "LocalBusiness", 
    "name": "{!! $seo['title'] or '' !!}",
    "url" : "{!! isset($seo['url']) ? $seo['url'] : '' !!}",
    "description" : "{!! $seo['description'] or '' !!}",
    "logo" : "{!! $seo['logo'] or '' !!}",
    "email": "{!! $seo['email'] or '' !!}",
    "openingHours": [ "{!! $seo['openingHours'] or '' !!}" ], 
    @if(isset($seo['streetAddress']) && $seo['streetAddress'])
    "address": { 
        "@type": "PostalAddress", 
        "streetAddress": "{!! $seo['streetAddress'] or '' !!}",
        "addressLocality": "{!! $seo['addressLocality'] or '' !!}",
        "addressRegion": "{!! $seo['addressRegion'] or '' !!}",
        "areaserved" : "{!! $seo['areaserved'] or '' !!}",
        "postalCode": "{!! $seo['postalCode'] or '' !!}"
    }, 
    @endif
    @if(isset($seo['latitude']) && $seo['latitude'] && isset($seo['longitude']) && $seo['longitude'])
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": {!! isset($seo['latitude']) ? $seo['latitude'] : '' !!},
        "longitude": {!! isset($seo['longitude']) ? $seo['longitude'] : '' !!}
    },
    @endif
    "contactPoint" : 
    [ 
        {
            "@type" : "ContactPoint",
            "telephone" : "{!! $seo['phone'] or '' !!}",
            "contactType" : "{!! $seo['contactType'] or '' !!}",
            "hoursAvailable" : "{!! $seo['openingHours'] or '' !!}",
            "availableLanguage": {
                "@type": "Language", 
                "name": "French"
            }
        }
    ]
}
</script>
@endif