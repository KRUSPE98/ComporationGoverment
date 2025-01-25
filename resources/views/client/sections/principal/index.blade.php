@extends('client.layout.layout')
@section('title','Principal')

@section('custom-links')
    {{-- <link rel="stylesheet" href="{{asset('css/principal/sectionSlider.css?v='.time())}}"> --}}
    <link rel="stylesheet" href="{{asset('css/principal/sectionSlider.css?v='.time())}}">
    <link rel="stylesheet" href="{{asset('css/principal/sectionServices.css?v='.time())}}">
    <link href="{{asset('css/owl-carousel/owl.carousel.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/owl.theme.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/owl-carousel/owl.transitions.css?v='.time())}}" rel="stylesheet">
    <link href="{{asset('css/principal/animate.css?v='.time())}}" rel="stylesheet">
@endsection

@section('content')

    @component('client.sections.principal.slider')
    @endcomponent
    @component('client.sections.principal.servicios')
    @endcomponent
    @component('client.sections.principal.trabajo')
    @endcomponent


@endsection


