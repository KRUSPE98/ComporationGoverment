@extends('client.layout.layout')
@section('title','Inicio')

@section('custom-links')

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


