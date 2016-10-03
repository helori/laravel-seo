<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!--  Structured Data : Local Business -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<script type="application/ld+json"> 
{
    "@context" : "http://schema.org", 
    "@type" : "LocalBusiness", 
    "name": "{!! Seo::get('global-title') !!}",
    "url" : "{{ url('/') }}",
    "description" : "{!! Seo::get('global-description') !!}",
    "logo" : "{{ Seo::get('logo-url') }}",
    "email": "{{ Seo::get('email') }}",
    "openingHours": [ "{{ Seo::get('opening-hours') }}" ], 
    "address": { 
        "@type": "PostalAddress", 
        "streetAddress": "{!! Seo::get('street-address') !!}",
        "addressLocality": "{!! Seo::get('address-locality') !!}",
        "addressRegion": "{!! Seo::get('address-region') !!}",
        "addressCountry": "{!! Seo::get('address-country') !!}",
        "areaserved" : "{{ Seo::get('area-served') }}",
        "postalCode": "{{ Seo::get('postal-code') }}"
    }, 
    @if(Seo::has('latitude') && Seo::has('longitude'))
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": {{ Seo::get('latitude') }},
        "longitude": {{ Seo::get('longitude') }}
    },
    @endif
    "contactPoint" : 
    [ 
        @foreach(Seo::contactPoints() as $i => $contact)
            {
                "@type": "ContactPoint",
                "contactType": "{{ $contact['type'] }}",
                "telephone": "{{ $contact['phone'] }}",
                "areaServed" : "{{ $contact['area-served'] }}",
                "hoursAvailable" : "{{ $contact['opening-hours'] }}",
                "availableLanguage": [
                    @foreach($contact['available-languages'] as $j => $language)
                        "{{ $language }}" {{ ($j < count($contact['available-languages']) - 1) ? ',' : '' }}
                    @endforeach
                ]
            }
            {{ ($i < count(Seo::contactPoints()) - 1) ? ',' : '' }}
        @endforeach
    ]
}
</script>
