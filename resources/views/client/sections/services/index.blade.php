@extends('client.layout.layout')
@section('title', 'Servicios')
@section('meta_description', 'Descubre los servicios que ofrecemos para mejorar la gobernanza familiar en las agroempresas y fortalecer sus operaciones.')

@section('custom-links')

<link rel="canonical" href="https://profesionalizacionagroempresarial.com/servicios" />


<meta property="og:title" content="Servicios | Consultoría y Capacitación para Agroempresas Familiares" />
<meta property="og:description" content="Capacitación y asesoría estratégica en gobernanza familiar corporativa para agroempresas." />
<meta property="og:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />
<meta property="og:url" content="https://profesionalizacionagroempresarial.com/servicios" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Servicios | Consultoría y Capacitación para Agroempresas Familiares" />
<meta name="twitter:description" content="Soluciones personalizadas en gobernanza y desarrollo empresarial familiar." />
<meta name="twitter:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Servicios - Consultoría y Capacitación en Gobernanza Familiar Corporativa",
        "url": "https://profesionalizacionagroempresarial.com/services",
        "logo": "https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png",
        "description": "Somos una empresa de consultoría mexicana especializada en la profesionalización de empresas familiares del sector agroalimentario del país.",
        "sameAs": [
            "https://www.facebook.com/Gobernanza.familiar",
            "https://www.instagram.com/gobernanza.familiar/",
            "https://www.tiktok.com/@gobernanza.familiar",
            "https://www.youtube.com/@gobernanza.familiar"
        ],
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+52-221-345-8714",
                "contactType": "customer support",
                "areaServed": "MX"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+52-551-836-5601",
                "contactType": "customer support",
                "areaServed": "MX"
            }
        ],
        "foundingLocation": {
            "@type": "Place",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "MX"
            }
        },
        "service": [
            {
                "@type": "Service",
                "name": "Consultoría en Gobernanza Familiar",
                "description": "Ofrecemos asesoría a empresas familiares para la implementación de estrategias de gobernanza, asegurando una estructura organizacional eficiente y sostenible.",
                "serviceType": "Consulting"
            },
            {
                "@type": "Service",
                "name": "Capacitación para Empresas Familiares",
                "description": "Brindamos programas de formación para los miembros de empresas familiares, enfocándonos en la mejora de sus habilidades en gestión y toma de decisiones.",
                "serviceType": "Training"
            },
            {
                "@type": "Service",
                "name": "Desarrollo de Planes Estratégicos para Empresas Agroindustriales",
                "description": "Diseñamos planes estratégicos adaptados a las necesidades del sector agroalimentario para empresas familiares, promoviendo su crecimiento y sostenibilidad.",
                "serviceType": "Strategy Development"
            }
        ]
    }
</script>


<link rel="stylesheet" href="{{asset('css/services/clasification.css?v='.time())}}">
<link rel="stylesheet" href="{{asset('css/services/presentation.css?v='.time())}}">
<link rel="stylesheet" href="{{asset('css/principal/flip_card.css?v='.time())}}">
@endsection


@section('content')


    @component('client.sections.services.presentation')
    @endcomponent
    @component('client.sections.services.history')
    @endcomponent
    @component('client.sections.services.herramientas')
    @endcomponent
    @component('client.sections.services.clasification')
    @endcomponent

@endsection

@section('custom-scripts')
<script src="{{ asset('js/services/services.js?v='.time()) }}"></script>
@endsection
