<script type="application/ld+json"> 
{
    "@context" : "http://schema.org", 
    "@type" : "LocalBusiness", 
    "name": "<% isset($seo['title']) ? $seo['title'] : '' %>",
    "url" : "<% isset($seo['url']) ? $seo['url'] : '' %>",
    "description" : "<% isset($seo['description']) ? $seo['description'] : '' %>",
    "logo" : "<% isset($seo['logo']) ? $seo['logo'] : '' %>",
    "email": "<% isset($seo['email']) ? $seo['email'] : '' %>",
    "openingHours": [ "<% isset($seo['openingHours']) ? $seo['openingHours'] : '' %>" ], 
    @if(isset($seo['streetAddress']) && $seo['streetAddress'])
    "address": { 
        "@type": "PostalAddress", 
        "streetAddress": "<% isset($seo['streetAddress']) ? $seo['streetAddress'] : '' %>",
        "addressLocality": "<% isset($seo['addressLocality']) ? $seo['addressLocality'] : '' %>",
        "addressRegion": "<% isset($seo['addressRegion']) ? $seo['addressRegion'] : '' %>",
        "areaserved" : "<% isset($seo['areaserved']) ? $seo['areaserved'] : '' %>",
        "postalCode": "<% isset($seo['postalCode']) ? $seo['postalCode'] : '' %>"
    }, 
    @endif
    @if(isset($seo['latitude']) && $seo['latitude'] && isset($seo['longitude']) && $seo['longitude'])
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": <% isset($seo['latitude']) ? $seo['latitude'] : '' %>,
        "longitude": <% isset($seo['longitude']) ? $seo['longitude'] : '' %>
    },
    @endif
    "contactPoint" : 
    [ 
        {
            "@type" : "ContactPoint",
            "telephone" : "<% isset($seo['phone']) ? $seo['phone'] : '' %>",
            "contactType" : "<% isset($seo['contactType']) ? $seo['contactType'] : '' %>",
            "hoursAvailable" : "<% isset($seo['openingHours']) ? $seo['openingHours'] : '' %>",
            "availableLanguage": {
                "@type": "Language", 
                "name": "French"
            }
        }
    ]
}
</script>