@extends('client.layout.layout')
@section('title','Nosotros')
@section('meta_description', 'Conoce a nuestro equipo y nuestra misión en el área de consultoría y capacitación en gobernanza familiar para agroempresas.')

@section('custom-links')

<meta property="og:title" content="Nosotros | Equipo de Expertos en Gobernanza Familiar Corporativa" />
<meta property="og:description" content="Conocé a los profesionales detrás de nuestra consultoría especializada en gobernanza familiar corporativa." />
<meta property="og:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />
<meta property="og:url" content="https://profesionalizacionagroempresarial.com/nosotros" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Nosotros | Equipo de Expertos en Gobernanza Familiar Corporativa" />
<meta name="twitter:description" content="Consultores comprometidos con el desarrollo de agroempresas familiares." />
<meta name="twitter:image" content="https://profesionalizacionagroempresarial.com/images/partials/nav/CGF-logo-new.png" />


<link rel="stylesheet" href="{{asset('css/abouts/presentation.css?v='.time())}}">
<link rel="stylesheet" href="{{asset('css/principal/flip_card.css?v='.time())}}">
@endsection


@section('content')
    @component('client.sections.abouts.presentation')
    @endcomponent
    @component('client.sections.abouts.response')
    @endcomponent
    {{-- @component('client.sections.abouts.philosophy')
    @endcomponent --}}
@endsection

