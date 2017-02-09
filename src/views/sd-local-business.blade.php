<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!--  Structured Data : Local Business -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<?php
$path = ((substr(Seo::get('global-image'), 0, 1) !== '/') ? '/' : '').Seo::get('global-image');
if(is_file(public_path().$path)){
    $image_url = $path;
}
?>

<script type="application/ld+json"> 
{
    "@context" : "http://schema.org", 
    "@type" : "{{ Seo::get('local-business') ? Seo::get('local-business') : 'LocalBusiness' }}", 
    "name": "{!! Seo::get('global-title') !!}",
    "url" : "{{ url('/') }}",
    "description" : "{!! Seo::get('global-description') !!}",
    "logo" : "{{ Seo::get('logo-url') }}",
    "email": "{{ Seo::get('email') }}",
    "telephone": "{{ Seo::get('phone') }}",
    "openingHours": [ "{{ Seo::get('opening-hours') }}" ], 
    "priceRange": "{{ Seo::get('price-range') ? Seo::get('price-range') : '€€' }}",
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
    "sameAs" : [
        @foreach(Seo::similarTo() as $i => $similar)
            "{{ $similar }}" {{ ($i < count(Seo::similarTo()) - 1) ? ',' : '' }}
        @endforeach
    ],
    @endif
    @if(isset($image_url))
    "image" : "{{ asset($image_url) }}",
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
