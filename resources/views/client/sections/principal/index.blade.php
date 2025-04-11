@extends('client.layout.layout')
@section('title','Inicio')
@section('meta_description', 'Bienvenidos a nuestro sitio web, donde ofrecemos servicios de consultoría y capacitación en gobernanza familiar para agroempresas.')

@section('custom-links')

    <!-- SEO para motores de búsqueda -->
    <link rel="canonical" href="https://profesionalizacionagroempresarial.com/" />


    <!-- Open Graph -->
    <meta property="og:title" content="Inicio | Consultoría y Capacitación en Gobernanza Familiar Corporativa" />
    <meta property="og:description" content="Brindamos soluciones a agroempresas familiares a través de consultoría y capacitación en gobernanza, fortaleciendo su crecimiento sostenible." />
    <meta property="og:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />
    <meta property="og:url" content="https://profesionalizacionagroempresarial.com/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Inicio | Consultoría y Capacitación en Gobernanza Familiar Corporativa" />
    <meta name="twitter:description" content="Brindamos soluciones a agroempresas familiares a través de consultoría y capacitación en gobernanza." />
    <meta name="twitter:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />


    <!-- ✅ Rich Snippet JSON-LD -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Inicio - Consultoría y Capacitación en Gobernanza Familiar Corporativa",
        "url": "https://profesionalizacionagroempresarial.com/",
        "logo": "https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png",
        "contactPoint": [
            {
            "@type": "ContactPoint",
            "telephone": "+52-221-345-8714",
            "contactType": "customer service"
            },
            {
            "@type": "ContactPoint",
            "telephone": "+52-551-836-5601",
            "contactType": "customer service"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/Gobernanza.familiar",
            "https://www.instagram.com/gobernanza.familiar/",
            "https://www.tiktok.com/@gobernanza.familiar",
            "https://www.youtube.com/@gobernanza.familiar"
            ]
        }
    </script>


    {{-- <link rel="stylesheet" href="{{asset('css/principal/sectionSlider.css?v='.time())}}"> --}}
    <link rel="stylesheet" href="{{asset('css/principal/sectionSlider.css?v='.time())}}">
    {{-- <link rel="stylesheet" href="{{asset('css/principal/sectionServices.css?v='.time())}}"> --}}
    <link rel="stylesheet" href="{{asset('css/principal/sectionAgriFood.css?v='.time())}}">
    <link rel="stylesheet" href="{{asset('css/principal/video.css?v='.time())}}">
    {{-- <link href="{{asset('css/owl-carousel/owl.carousel.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/owl.theme.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/owl.transitions.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/principal/animate.css?v='.time())}}" rel="stylesheet"> --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

@endsection

@section('content')

    @component('client.sections.principal.slider')
    @endcomponent

    @component('client.sections.principal.agri-food')
    @endcomponent

@endsection


