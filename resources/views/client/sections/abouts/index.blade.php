@extends('client.layout.layout')
@section('title')
Nosotros
@endsection

@section('custom-links')
<link rel="stylesheet" href="{{asset('css/abouts/presentation.css?v='.time())}}">
@endsection


@section('content')
    @component('client.sections.abouts.presentation')
    @endcomponent
    @component('client.sections.abouts.response')
    @endcomponent
    @component('client.sections.abouts.philosophy')
    @endcomponent
@endsection

