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
