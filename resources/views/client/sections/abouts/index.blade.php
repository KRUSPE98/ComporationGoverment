@extends('client.layout.layout')
@section('title','Nosotros')
@section('meta_description', 'Conoce a nuestro equipo y nuestra misión en el área de consultoría y capacitación en gobernanza familiar para agroempresas.')

@section('custom-links')
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

