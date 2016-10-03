<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!--  Structured Data : Organization -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<script type="application/ld+json">
{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "url" : "{{ url('/') }}",
    "logo" : "{{ Seo::get('logo-url') }}",
    "name" : "{!! Seo::get('global-title') !!}",
    "sameAs" : [
        @foreach(Seo::similarTo() as $i => $similar)
            "{{ $similar }}" {{ ($i < count(Seo::similarTo()) - 1) ? ',' : '' }}
        @endforeach
    ],
    "contactPoint": [
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
