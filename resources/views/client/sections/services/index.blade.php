@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('custom-links')
<link rel="stylesheet" href="{{asset('css/services/clasification.css?v='.time())}}">
<link rel="stylesheet" href="{{asset('css/services/presentation.css?v='.time())}}">
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
    {{--
    @component('client.sections.abouts.video')
    @endcomponent --}}

@endsection

