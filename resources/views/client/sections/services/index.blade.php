@extends('client.layout.layout')
@section('title', 'Servicios')
@section('meta_description', 'Descubre los servicios que ofrecemos para mejorar la gobernanza familiar en las agroempresas y fortalecer sus operaciones.')

@section('custom-links')
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
